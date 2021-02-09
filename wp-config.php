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
define( 'DB_NAME', 'blog_montereau' );

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
define( 'AUTH_KEY',         '0y?gopP#u&9.pSTZ=cj7)J-Byay&q78|wz#(,@:8]FH$AGEQx-W(Nz ^~a7R-.I[' );
define( 'SECURE_AUTH_KEY',  'H<aB#0J[fd.!e8U9/|Cth{S*l.};Z`S1GNP)?(A aP4Ifk/cj;n@jD=ckZtQ&B-I' );
define( 'LOGGED_IN_KEY',    '5Ly7>G(jbP$mmvl!c*XWQO]MCN,V6EUT#/l&L;v{9`W0j&;s.6!y#X]NUQ4<^TXi' );
define( 'NONCE_KEY',        '}A/]A.(F/0u{#e6M+,^J-(UkFkNJjI!#%#}CZZ8jxZAOH~}x0d= ua&R,>Im~[z!' );
define( 'AUTH_SALT',        'QP]i:hxGMdMPO~VOR&`ySERSGve&v?}uV3^U,%^!zMA(st+aZ[~r1(}V>-~}p[Gn' );
define( 'SECURE_AUTH_SALT', 'k9kuGgb9 _SC_9m8cwJx9ZD+^[fDl5Y~*IJd)+lZCT3HK@j|^5l,<e #>H@>.~^y' );
define( 'LOGGED_IN_SALT',   'NWLuMa_XB#%rrobIVG76U`v>;]*|>)+y67,FF52et`z,ka+e6knG6yiWbDL!bp=O' );
define( 'NONCE_SALT',       'r4c2^PI,Fko%dG)~~m#*TW*?[!9*lo1Z>fWI%{IQ(/5YV^TUJs[-HdqR0/hOe{6O' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
