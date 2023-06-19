<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty_energy_drink' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QtI7pI~)iH}BErH<Jh+M_YFyZ=hr4e ):k8ESaBE^OA|B*Rs6OV;~XVaKpk03ASY' );
define( 'SECURE_AUTH_KEY',  'L)3u}J9%r!.fN(@txT*/hZffTCOVAFy`yjHMT?uy/ G19JH%XhZ/>hO?gNa@Q-8m' );
define( 'LOGGED_IN_KEY',    'cr*mXydRH5=#^IEX8]<!l;WAE53y~xLJ[o_tAXc5D6nCi`)di=SUTj)eV ]f2j>w' );
define( 'NONCE_KEY',        '2a]pOhHd.DPhcRVIvd.z|/0 Ie}$[K?HsA|2Vw&m%a.b8~6KQ7,m4CF~pw~fiO{.' );
define( 'AUTH_SALT',        'xY<j3yDebXD!L)t^`8f5Z4OG!AJnYo}&#5^cVh#9fEE_kIINp&.4YzQj&BJu/qHa' );
define( 'SECURE_AUTH_SALT', ':zK0Y5R&x@^Wu=dVA?s250OSf54(GA@*l56MTNWMDnpu@kCK1RrY4(glU[=de8J8' );
define( 'LOGGED_IN_SALT',   'u6~fMF/aFNGXgU)%V0dbY=umSH,gZdh_|4;cc&oF/DM;Y+VWc2p/q!kQb?s6(A]+' );
define( 'NONCE_SALT',       'mVIn3bAL`6-{f~.Pqb>_]I4mU<&Ng.ce..$KU]`o=3Yq<8~eg0tegzF&Lq*%zm:|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_HOME', 'http://localhost/planty');
define('WP_SITEURL', 'http://localhost/planty');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
