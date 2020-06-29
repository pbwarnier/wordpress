<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_4YYihPKhMi*y(CDt)b(T~JcQD-FSliusg..YP9Zz1}ApMgYuYD1%0i<})6|ZZkE' );
define( 'SECURE_AUTH_KEY',  'A%0!a.Zg$o}sYxE&(WbPQ]Mq,S#KtDL7PG`m)7|0XIc4VYg@l.~x*5nI>g]>q)MY' );
define( 'LOGGED_IN_KEY',    'OF`oHY@MV{]^|/w^MUuBPJnw|SIV<1Q:F+tO}i>VS)P$N2(KC.*T!U`(OjMiAxkd' );
define( 'NONCE_KEY',        'cGK86ZonA=gAUe}&!F#v|dAq`@hSBQ=m=b|J5WQaRmB@Lcd:0zRV*FDYy<m4,cvL' );
define( 'AUTH_SALT',        'P#R1zlYb?MBw8`>eBa2}&uKBk2|<4sUHV,m=$xa5,++<D#1^k!fp:YreL[8}a,g~' );
define( 'SECURE_AUTH_SALT', 'T%>%#;R]_,u=pACQOjWD5(VSe}kaF`@{~,H$,oxKPt>8mR_SXD@ fsFvEKWo3:Cr' );
define( 'LOGGED_IN_SALT',   'kAgpnPT=Wh2/CzNC06{2 ./,SC6>~+oE3MgV`3G|x|YKz+Dw?vf4oXxc>n2C08,p' );
define( 'NONCE_SALT',       'u!FM|e5{!:5$cSvghamz3Nov3=[2_k<^u/[y.#s`EZQ+W>d8c+H,N$?8<zt3b{w?' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
