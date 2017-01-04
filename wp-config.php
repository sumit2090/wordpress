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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', 'test');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'aTYF(QE&@O*yN7fD1I;9P- ?e2|=}JZbXR~pRj,_<-<KvhTA7(n#Z%Q<-GM|+D0Y');
define('SECURE_AUTH_KEY',  'Pg3B}J8|.RT*Y0iMNKsQ7rDAF]sN !Gr&Vb2+jmSi~jYF. Wa~o4v@8A*8v:k(sc');
define('LOGGED_IN_KEY',    '>(xq9@V@RdKZ;M:#pYRdVAlJYwyA*><Ur3&q^c^vaB(YK=?)M?M$C?e#3 Z_TfwC');
define('NONCE_KEY',        'Yo^2IO|)]g+vBoOkM7t32Swcg ef2=g20.fxtBE_q{tn|<0Ul%k>K3&[N:8m*6><');
define('AUTH_SALT',        'k~JB8d*21a]5}+!],qLd$Ws%2BdHm6u,8n-*,]:w$)ogX)s(@=ByKf|u^Vra|_:7');
define('SECURE_AUTH_SALT', 'jYsxXU.RjitczQ=,w(wU{47rb yq_E(ZI$w*[W 66K)/YinPPzvpD.LdbDfN$?b|');
define('LOGGED_IN_SALT',   '|=pE#8,UA&b+fG~Ts: |S(TT8thkX,efxccPFS$Ae1V40[@QP|8 i?HR#+xm Nxc');
define('NONCE_SALT',       'xMsS|*Px,i]cM<|wbv@Klun&wM4,idy@51rRI/4S8^#$gr6.m96?A#:>=/r:)CpU');

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
