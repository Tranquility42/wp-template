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
define( 'DB_NAME', 'new-wp' );

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
define( 'AUTH_KEY',         '!G!9g`O:TZ#S+TS&cJl^/!C# c#z#EXIOMPiH?C]p}3YFu!-l.WK7iq*#P[YGw-M' );
define( 'SECURE_AUTH_KEY',  'J4aR<P$*;$1#}8:i-tl~Q(fP`[2_Nfs<EDfHj6L~R{nQL*rYez?hg93a&`Ee)k+$' );
define( 'LOGGED_IN_KEY',    '72lF[dX*|VJtnLdq|4XG&qoM2p-H6&x~Nv]0]Fa0|8r<fb&cj@Anc]hjru-zr{J-' );
define( 'NONCE_KEY',        '*PJ$.8f{u*|XlFxbY!} jk{dC&>lYf(0E17<%YeF8A0Mx|o<|$3xTJScPv%_SZv3' );
define( 'AUTH_SALT',        ':f=u+=_4b2!GI6X&GUy;IR%dh|#i,M2Pk_s9%z#5_0$Y-=O @O2mQ|aZt?s+,?Y+' );
define( 'SECURE_AUTH_SALT', '?`}.K@%7L[@wp2|!P3%NlwWQmAZI@CnJ9*&~@h3^3(%Y](i 687=ZuM$xZ}^1c:G' );
define( 'LOGGED_IN_SALT',   'S)V4B=USw?VUc4EzV,;a]fk!v`wqkS1zValM^nCQ!OZ!<N-$StBWWO^E+e#!XkiC' );
define( 'NONCE_SALT',       '<AVwPS(}!!S8@liK|tNKQk,S0Wk_A_i#u_Jwh<8D}?w>:q6t-6Si?QwbNGVIGV]O' );
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
