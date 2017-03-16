<?php

/**

 * The base configurations of the WordPress.

 *

 * This file has the following configurations: MySQL settings, Table Prefix,

 * Secret Keys, WordPress Language, and ABSPATH. You can find more information

 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing

 * wp-config.php} Codex page. You can get the MySQL settings from your web host.

 *

 * This file is used by the wp-config.php creation script during the

 * installation. You don't have to use the web site, you can just copy this file

 * to "wp-config.php" and fill in the values.

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'dimwordpresssmil');



/** MySQL database username */

define('DB_USER', 'dimwordpresssmil');



/** MySQL database password */

define('DB_PASSWORD', 'testsi@Sonvh2');



/** MySQL hostname */

define('DB_HOST', 'dimwordpresssmil.db.8124065.hostedresource.com');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         '!7Qek| ~d-]a_==5w&.:-mb-m#n.8<r5 Bvm~&FFLGV?ft+N?`sLRL~O%~Uoo_i ');

define('SECURE_AUTH_KEY',  'PZ*@;=s!9z]^5C$lo]py#qd$41</q}s$.-Gmbc`/OJf[u$bf>M8+ocj,kJ{Biomn');

define('LOGGED_IN_KEY',    '9Mh,p*|+omt5|@Hm$Dt+t_4p058d59KJ[/DeGvdU{p=_=~F`7ZLg<R2,+[QRcmA]');

define('NONCE_KEY',        'w;7k5mPiuD_;ZDDiHMM<C`$eK-qKL}7+xk;PPcfZ*|]KeG)VcxN/:p< .ia?+]KT');

define('AUTH_SALT',        '<mNVZj.5O&M/ee80kQaTkG>}5XO^JXm7Yo:mAwq(V]zXR%(q5B!n6Wq @12d/+sp');

define('SECURE_AUTH_SALT', '_P_2mQF28#Q{Pwf/F-|0ow@S|l/K<;<%xL]#Tk1A1C[9Fpay@%&m[:>0(H- /LH#');

define('LOGGED_IN_SALT',   '<Zc^G;C*.W{tM@5>w0q^_E@dk3[YKt>)~i8?,Bg(*o.:ld@]SEr89]S[db#!hgCd');

define('NONCE_SALT',       '86,`x~Cslh&a2xy)<{OLc0[=+.9MGYlNv,t4RX$.UGJrx|_`@1rJezIW]DP*| uh');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each a unique

 * prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * WordPress Localized Language, defaults to English.

 *

 * Change this to localize WordPress. A corresponding MO file for the chosen

 * language must be installed to wp-content/languages. For example, install

 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German

 * language support.

 */

define('WPLANG', '');



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 */

define('WP_DEBUG', false);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

