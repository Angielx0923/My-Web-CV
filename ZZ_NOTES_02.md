# ETAPES INSTALLATION & PREPA PROJET WORDPRESS

1 - On télécharge et installe WORDPRESS (wordpress.org)

2 - BDD - On crée un nouvel utilisateur dans phpmyadmin, on lui donne bien tous les droits. C'est un bon réflexe pour augmenter la sécurité à l'accès de nos données

3 - LES DROITS - On donne les droits en ligne de commande :

    3.1 - sudo chown -R nomutilisateur:www:data . 
    (en tant que superuser fait (sudo) je donne les droits (chown) de manière récursive (-R) à l'utilisateur propriétaire (nomutilisateur) et (:) au groupe propriétaire (www-data) dans le dossier courant (.)

    3.2 - sudo find . -type f -exec chmod 664 {} +
    (en tant que superuser fait (sudo) cherche (find) dans le dossier courant (.) )

    3.3 - sudo find . -type d -exec chmod 775 {} +

4 - "C'EST PARTI" - on lance wordress sur le localhost
    Cela permet de le connecter à la BDD et ainsi générer le fichier wp-config.php 

5 - PERMALIENS - Dans le backoffice de wordpress, dans les réglages, on régle les permaliens sur "titre de la publication". Il est essentiel de faire cette étape dès le départ de création du site car si on le change en cours de route, les sites vont renvoyer vers des URLS qui n'existent plus --> problème d'indéxation avec les moteurs de recherches.

6 - HTACCESS - On peut ouvrir VSC. On va venir modifier le fichier .htaccess et remplacer le contenu par les lignes suivantes : 

    RewriteEngine on
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php [L]

    Il est préférable de rechecker les droits afin d'être sûr de pouvoir modifier le .htaccess. 
    - sudo chown -R nomutilisateur:www:data . 
    - sudo chmod 644 .htaccess

    A noter que parfois wordpress peut "beuguer" et remodifier le fichier .htaccess. C'est donc une bonne pratique et un bon réflexe que de re-vérifier en premier les droits d'accès aux fichiers si on a un problème.

7 - WP-CONFIG - On modifie le fichier afin de renforcer la sécurité et éviter toutes erreurs que pourrait commettre le client. De ce fait on va lui interdire certains accès.

    7.1 - activer le débug pour afficher les erreurs. On repasse sur false une fois qu'on remet le site en ligne.

        define('WP_DEBUG' , true);

        if ('WP_DEBUG') {
        define('WP_DEBUG_LOG', true);
        define('WP_DEBUG_DISPLAY', true);

    7.2 - Pour eviter de surcharger la BDD on set les révisions à un nombre maximum au choix. Ainsi on éviter de stocker un nombre infini de données (puisque tout est gardé en mémoire et dupliqué)

        define( 'WP_POST_REVISIONS', 3 );

    7.3 - On set le vidage auto de la corbeille sur un nombre de jours

        define('EMPTY_TRASH_DAYS', 10);

    7.4 - Si le client est connecté et que donc le débug est sur false alors :

        } else {

    7.5 - On set les révisions sur 7 par exemple. (On lui autorise a revenir 7 fois en arrière)

        define( 'WP_POST_REVISIONS', 7 );

    7.6 - On désactive la possibilité d'installer, updater des plugins ou thèmes (assez important)

        define( 'DISALLOW_FILE_MODS', true );
        }

    7.7 - On désactive l'éditeur embarqué afin de ne pas pouvoir modifier le code source directement dans wordpress (très important)
        define('DISALLOW_FILE_EDIT', true);

    7.8 - Je dis à wordpress qu'il à lui-même accès à ses propres fichiers. Il pourras donc se mettre à jour lui même, télécharger ses propres fichiers, MAJ, plugins, thèmes... sans me demander mes accès et cie. Attention, il est préférable de ne pas automatiser entièrement les maj afin d'eviter que le site se mette offline si problème. Donc on garde toujours la mains sur ce qu'il se passe et on clique nous même sur mettre a jour quand nécessaire.

        define('FS_METHOD', 'direct');

8 - GITIGNORE - On copie nos modifications du fichier wp-config.php dans wp-config-sample.php ainsi on peut lui dire quoi versionner dans le gitignore. On crée un fichier .gitignore et on lui dit de ne pas versionner wp-config.php . En revanche on le laisser versionner la version sample.

------

A l'avenir on va juste cloner ce repos de base et dupliquer le config-sample en wp-sample pour éviter de refaire toute les étapes d'instal. Penser à modifier les information de connexion à la base de donnée dans le wp-config.

### Ajouter une fonction dans wp pour hasher les mdp clients afin qu'ils ne soient pas écrit en clair est une très bonne pratique.

### Problème 1 : Si je déplace mon projet dans un autre dossier et que tout mon wordpress est cassé, comment le réparer ?
   * Solution * dans la BDD --> wp_options et on modifie le chemin du site url et de la home.
### Problème 2 : J'ai perdu mon mot de passe wordpress...
   * Solution * en BDD --> wp_users, on clique sur le mot de passe hashé. Evidemment celui-ci est perdu. On peut modifier en entrant un mdp en clair dans ce même champ à la place du précédent et on encode en MD5 avec phpmyadmin. Le MD5 n'est pas sécure mais à la prochaine connexion le mdp va automatiquement être hashé et salé par wordpress et être de nouveau sécure.

Index.php est le point d'entrée de wordpress
wp-includes : on y touche jamais, c'est la méchanique interne de wp (le back)
wp-admin : Tout ce qui touche au back également de wp. On y touche pas.
wp-content : C'est le dossier du dev ! on peut y toucher.

## Pile de chargement de wp

wp_load : il cherche le fichier wp_config. SI il ne le trouve pas il conclu qu'on est en train d'installer wp donc il lance l'installeur.
wp_settings : c'est le hub de wp, il vient lancer wp et charger tous ses fichiers

## INSTALL STANDARD

1 - Téléchargement de wordpress et décompression de son contenu dans le dossier ciblé

2 - création BDD

3 - On donne les droits, on crée le .htaccess on lui redonne les droits, on dupplique notre fichier sample qui était déja bien configuré, on lui donne les bonnes info de BDD, on peut isoler le fichier wp-content à la racine avec nos fichiers utiles et le renommer "content". On copie aussi le fichier index qu'on mettra à la racine puisqu'on va le versionner. Attention on ne le coupe pas, on le copie.

4 - On lance l'install de wordpress dans le localhost et on le connecte à la BDD afin qu'il génère les tables dans la BDD

5 - On crée un dossier wp dans lequel on va mettre tous les dossiers et fichiers auquels on ne touchera jamais et qu'on aura absolument pas besoin de versionner de ce fait. Ce sont les fichiers que génèrent wp.

6 - On peut ouvrir vsc. On va avoir une erreur dans le local host sur l'index car le chemin ne sera plus le bon et il faudra donc ajouter qu'il faut qu'il cherche dans le dossier "wp"

    `require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );`

7 - On va encore avoir une erreur car il ne cherchera pas dans le bon dossier, il faut donc ajouter deux lignes dans le fichier config pour rediriger vers notre localhost jusqu'au fichier wp_content.

        ```define( 'WP_CONTENT_URL', 'http://localhost/02_SPE_WORDPRESS/SPE_S01/S01E02/WP-Custom-Pattern-Angielx0923/content');
        define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content');```

8 - Gestion des permaliens
9 - Si on ne veut pas que "wp" apparaisse dans nos URL on peut le retirer dans les réglages --> général --> adresse web du site (url) et on retire juste la partie ou il est inscrit "wp"

*10* - Si le site à un problème de redirection et qu'il ne trouve pas la page, penser à checker sur la table option de la base de donnée la première ligne qui redirige le site et vérifer que le chemin est correct.

## INSTALLATION CUSTOM 

### 1 - INSTALL WORDPRESS 

       1.1.1 - On ouvre VSC, on cré composer.json
            - soit on écrit manuellement le code d'install,

                ```{
                "require": {
                    "johnpbloch/wordpress": "^5.1"
                }
                }```

        1.1.2- soit on peut aller sur le site packagist.org et lancer l'installation en ldc 
                `composer require johnpbloch/wordpress`

        1.2 - On crée la ligne de code qui permet de rediriger le contenu créé par composer dans le dossier "wp"

                "extra": {
                    "wordpress-install-dir": "wp"
                }

### 2 - INSTALL DE COMPOSER (gestionnaire de dépendances) + réorganisation structure projet

        2.1 - `composer install` en ldc. Là on lance la création des dossiers utiles a WP. On se retrouve avec un           dossier `vendor` et le dossier `wp`
        2.2 - On récupère le dossier wp-content qu'on se met à la racine et on le renomme "content"
        2.3 - Dans le dossier wp on va chercher le fichier index.php qu'on copie colle à la racine.
        2.4 - On modifie le chemin de l'index en ajoutant "wp" (et oui puisqu'on lui a demandé dans le Json de nous          tout nous mettre dans un dossier wp)
        2.5 - On récupère notre fichier wp-config-sample et on le dupplique pour créer le fichier wp-config.php
        2.6 - On modifie le wp-config.php
                - verifier que les deux lignes de code qui redirigent bien vers le dossier `content` existent
                    `define( 'WP_CONTENT_URL', 'http://monurl.local/content' );
                    define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );`
                - générer les clés de salage
                - vérifier qu'on à bien le FS_METHOD pour les maj auto etc
                - vérifier qu'on a bien le WP_DEBUG et ses conditions pour sécuriser
                    - affichage des erreurs `WP_DEBUG_DISPLAY`
                    - stockage des erreurs dans un fichier log `WP_DEBUG_LOG`
                    - que la gestion des versions de contenu est set `WP_POST_REVISIONS`
                    - que le vidage auto de la corbeille est set `EMPTY_TRASH_DAYS`
                    - que l'install des plugins et thèmes est désactivé pour le client `DISALLOW_FILE_MODS`
                    - que l'editeur embarqué est désactivé `DISALLOW_FILE_EDIT`
                (Penser à renseigner la base de donnée quand on voudra réutiliser cette install custom)
                - Penser à donner les droits

                **Penser à checker le codex si on a des doutes sur certaines constante**

### 3 - INSTALL DES THEMES & PLUGINS (dépendances)

        3.1 - On déclare la présence d'un autre repository sur lequel se trouve les dépendances qu'on va vouloir télécharger

            ```"repositories": [
                    {
                        "type": "composer",
                        "url": "https://wpackagist.org"
                    }
            ],```

        3.2 - par ex : on a besoin du thème de base twentynineteen qui est le thème par défaut

        3.3 - par ex : On veut le plugin "hello-dolly" par exemple

        3.4 - Pour éviter que composer installe les dépendances dans le wp-content par défaut, on ajoute en extra le chemin qu'il doit suivre.

            ```"extra": {
                "installer-paths": {
                    "content/themes/{$name}": ["type:wordpress-theme"],
                    "content/plugins/{$name}": ["type:wordpress-plugin"]
                }```

        3-5 - On supprime les trois dossiers `vendor`, `content` et `wp et on peut lancer en LDC `composer update`. Il va tout regénérer proprement.

### CONNEXION WP

- penser a changer les permaliens,
- retirer le `wp` de l'url
- mettre le bon chemin dans le dossier de config `WP_CONTENT_URL`
- renseigner la BDD


## Gestionnaires de dépendances/packages 

    - apt
    - composer
    - npm (Node Package Manager) --> Library JS

