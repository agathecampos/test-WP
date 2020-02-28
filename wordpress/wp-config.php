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
define( 'DB_NAME', 'monsite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'monsite' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'monsite' );

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
define( 'AUTH_KEY',         '-8Z3Ek4{8|U*i=#V-{gox*C<>?-Bc1VYn3EMtW?61U)Kd2,51lv`TU:7#@3S0#`@' );
define( 'SECURE_AUTH_KEY',  '1(gdBM:DW)`(YF481nt]]c2<vM5dtNTx{kq@z-l9Yrvx5j;1^O8A|f4MG^D~#oD5' );
define( 'LOGGED_IN_KEY',    '8FRS,IYw^@ROpd+%sb6xGpM$-u3KDdrT6h*kUOya5i-TB_c0hYUk;G,a7DM1;$]A' );
define( 'NONCE_KEY',        'c[>PM}]tK=+%V?wwz{hD3G%5+u;,%(5W[15`@@~,K OF;FjO2-}cj@=C*9%ZzvdA' );
define( 'AUTH_SALT',        'DtL~;HqBKb*`5H5t6(tmmf8Ulz9U[ZvL961x6g)pG%QQMxdVhU1-BBW&nS#I<WX[' );
define( 'SECURE_AUTH_SALT', ',u,pIEb0(OlJK[!=0+dqLd>$M_F/ZkRkLRiD&#7#<d4LlA{4i$?MT 6/<N((G]BP' );
define( 'LOGGED_IN_SALT',   'a,$}[nb<FX9[?dt9l:`E1r!@8qc#Rp~kg~n>#~6!Yl??3-*MWLsaG(EHJKS9dh+X' );
define( 'NONCE_SALT',       '5LjR!U; ErKC?%wx>j,(Y]l2.1>[{$);1%)vE0puK#)f lA=ksCA=2LVFqsz?ZH>' );
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
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
