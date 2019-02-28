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

define('DB_NAME', 'soft');


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

define('AUTH_KEY',         '!X~bn+/^{m(/IK]TNl=bCN?LMl&UOfqYS>V>^wMp1&2ddQLSO@Uhlq=0u7&nm< !');

define('SECURE_AUTH_KEY',  '6J8gBuoHOQ?@A S^!E$6W,&])*9!f?m?x1qS@y:Dt=.d1ojeO4uigey_%&Lv#s,l');

define('LOGGED_IN_KEY',    'z4G[B0$g`5wI>:M_[_ZoeyJSj.=2$5ItcW#{&ETnRTf^&iS+vDPzqOE?M >;60=w');

define('NONCE_KEY',        '4@Xv}`}_(,M*Lxbv/sfe[SitsCV>dpdY`XWS/FyZ]QI>_A#*HUPa0xqEb{EnJ=h2');

define('AUTH_SALT',        'fXm@QmJJixX.D]|=8F$#,cynnpgbrLzAF5{B%:J@PJ}<d.VN|l,?y89:r#?.N}%+');

define('SECURE_AUTH_SALT', 'E*9?W[2- ^SaJ T[$nhyg,T~]m $Lz~L6<]C<iE&f`N?4ne}#15[k5Ao;-RJRN4/');

define('LOGGED_IN_SALT',   'g!Q&Fu=1Gc3cd;y`U4emV.Cl?M6cq?rr+v2u!}>~Fx0 aV/E{>`10M0KsxKV;w97');

define('NONCE_SALT',       'Fq-]Of1xxrY/yk5Lob.-y6jF(^W5A)[ c W#B0&}v%f)8-68{}g@.oKYKRnds7q:');


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

