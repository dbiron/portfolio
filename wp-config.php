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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ' 04m;=mpON*$00?=vJ!6I$ZV34K% _|``r[.[`=!R)!p7$q:e,;ylX~hyimGBM3j' );
define( 'SECURE_AUTH_KEY',  'X?{oL_XCqG?_bxYKz=]6IJ?XHz0+,oeZ[kKnWo[LG{q;0{&X`rbiWe&8YEu77^1I' );
define( 'LOGGED_IN_KEY',    '_j>$YZ/.1eb)Os&iQbhRj3L3Y2j)_w{9izuU+lA(rOH /Tf~A;91&C~t$3jV|VZ8' );
define( 'NONCE_KEY',        '4<}9Fq7LH;fWX`87CZsu~l4:u^WQV~twRUOT:C@NtWD^9r1,Nf6|gsDcHRb<g2E3' );
define( 'AUTH_SALT',        '&sLkg9ye$AT6l $|>vsqzR#Bk9>V,L_AH%11oRM>wBi0~43x_J1@B{&7H5:o_:v?' );
define( 'SECURE_AUTH_SALT', '%vAYyu]j#@R|>jj!%vG63A]+~uJi}rPq58Lhd:GI=rR?>poLiw]FLGZ`;P?>]<$a' );
define( 'LOGGED_IN_SALT',   '/hg9Ku+tgcY)<M75jlTn);X}s3s6gjtY0t!U81?C/Y3b1]@]S[>(EQL4Cu6`Iw75' );
define( 'NONCE_SALT',       '0(mQYAzRU}gY{+d{@@7Vl)y{tk~fZW<#[2q,qZZZYu@i)0TkXQH>E7|nSs}HA@|c' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wppf_';

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
