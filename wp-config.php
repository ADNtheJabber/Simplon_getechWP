<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bdgetech' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LC.H5*`f~c_M4f;Nr-+g*M3YTm}MN4wk1g@(FY<}|cFqk3|?L/0c.uu)/=]-5a~_' );
define( 'SECURE_AUTH_KEY',  'bU20_{7?6I*-xBC-]q:@MN4EEl3@[<SoKyBm`6eDroDfpoL(z42<9R gkF`RxaHl' );
define( 'LOGGED_IN_KEY',    'um<_TWqS$NjMcws<.cujHei U)@ :29HR%F;wju A]S&#wI0=>&<<Wvd/};4][F,' );
define( 'NONCE_KEY',        '4[r1ez(LU!|iQa~URz,#>}UXtflaINT+k9IQc_:-xrPcgD2WCMz+^!6~Z,o|6|[J' );
define( 'AUTH_SALT',        '$!z?QO-2p9+Y!UH12d/dg<t:CmO?tv#%:fVq/bSHWx;GZWU XnSiw`95-bPY#N+Y' );
define( 'SECURE_AUTH_SALT', 'PxE6=?_RyPH7Zha?Sq+cBYuZM#0>5^J?CcXsAJh|bVN?jH85b<v7b;.v]]c. m7p' );
define( 'LOGGED_IN_SALT',   'z M5Oe:(LoqsB-43KCy8aK>bSh?8N!9Z&X,vTRNH<9kdpUON6z$Zy2)qCKaoc|pq' );
define( 'NONCE_SALT',       'YqYe&4bn;A12tu9,UQ4vx`#H3c.z{H=$iyQ^N)usA[esLhjDrdTW!6!Knsw+eMov' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
