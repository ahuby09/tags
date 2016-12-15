<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'walkerswear');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'H4pGd_?,EZNeOcHL*DT$K*6RPBjkju>8I.h*^[R3yO:d6y1N)p6Tm6KH|?52LWm?');
define('SECURE_AUTH_KEY',  'b#ac=(XOWL=A [W26$G`>}[Y79C]uDTUV[pU/KS2QYx;bX1eQ.~MF!`eRF95KObF');
define('LOGGED_IN_KEY',    'S4RIA/`ykPs=)N%Tf?G8ev@bOu1w)K8ltv*MhRkXucScWHP6^EM>:wOJw>(jT=J^');
define('NONCE_KEY',        '!}dtZwz,hFg/_i8XxE:>l;*n3?MjDAoKwCkYzNbb~,;0!Q`b/@:Ts%v;{=k,b`y.');
define('AUTH_SALT',        '9`&p/0JMk|KNYvNTm7gh9b;:4F|^ipi9uMon@M^FQlv773*7+7*HQ:_^)jz9KQ^.');
define('SECURE_AUTH_SALT', 'm#_~~w]{Q_7K(ykP4p)B_(4D50v]&|:nGupaIS3E5H]be,gY{s6xkIK^Mnmw(*q/');
define('LOGGED_IN_SALT',   'I_ZEOF L](6%|=0K1$a~/u=TzRQO+>[ i+PKE/lnSSN`Tq^ f6bm^?:okcVy;U&s');
define('NONCE_SALT',       '/]~Lv}7(b6_vDP_Grr..cT`Jm`gAm1b:zVJ3ZvLarY+YeAO)ft{<nfcJQ/Tu]T)@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
