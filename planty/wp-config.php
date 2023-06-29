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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'fC>oy)O@_N}8|lnH!{X%rn<)fRCbaoUhxe[bx31K[Aw-HJ(-EsA9>yTVa=KN^qV}' );
define( 'SECURE_AUTH_KEY',  'kaNc0J&@$;J::|>-47k#)O)A`?^?n7),PuKHRrRL2g,WUc%m67N?}nh:Gx1t@,b|' );
define( 'LOGGED_IN_KEY',    'd4HUgiS4r:VX;-r}[%M@^]|,i`1Ko@6>}l2.@U&XANyZ|QrsAqZ%j-&LmdSN90@p' );
define( 'NONCE_KEY',        'o))87!RIj)-_PikqV;)+]|x{r(O0<iJ|*Z9<Z7UqOfpW}6+`F>p%5bAK)p)(qS=@' );
define( 'AUTH_SALT',        '[;ONiY%P>c?wxZ--po|v7vGi&`CF%Y>!(y9%Xa)2_]])Q^PGNi?k|=A0H<K@: ?=' );
define( 'SECURE_AUTH_SALT', ';yEa@VZGg9p&?*h#j^Xm9<~Jp^#w#_k|vHc6@0uwj|^C`0PSwZA0| ~AYEQD&W6R' );
define( 'LOGGED_IN_SALT',   'x7WG%EEqy26SR{BuE+OmCIb<t0,&0JP@2Ig}@< %d#[]7uLIAUytD8?d2?R+N8 {' );
define( 'NONCE_SALT',       '<q$@*mK!pgi-~DOQ[=aQ]+X@s]:#]c;77Z{Nf5PkmbrQ%r!kE$3@R&4t~d!>0SLh' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
