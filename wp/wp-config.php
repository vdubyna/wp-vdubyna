<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@D:j}OdOC&Tq+7czT{QivBDze(T<YG}- kF6mPcNU8 LbQ|`O]GNKcsPSgSD>3)B');
define('SECURE_AUTH_KEY',  'H9K+Dd5-=|+Qb7PHi(p)R:mV-rL@5)uec;8PTT A8/L+`r!PB~qjN]cq_*LEO2aT');
define('LOGGED_IN_KEY',    '^iOEe42-hlgfqWDL&eJZ6Poqj+OvGK2+lNG?+IDmw2.9vO`zNVMZO?5fe-~x-M*s');
define('NONCE_KEY',        'Xv2elUvhTWxt#ebK%$ScWf#}Slrqt|`[+0S<x20i^BU{W|1] `c5EQ7JXjTnJ^m~');
define('AUTH_SALT',        '1:(UMqeRo0rn./I}18k<Jnb,B7kkCW@w$p)>gW4I4];{UWGV/y)z9DiL@LXSzy|-');
define('SECURE_AUTH_SALT', 'lO|l+iM=w>&+wkaC>0(O|d&_Ku6d;2S:FhG<y+#--G;m0TGOyl2 x7#4H>+%W$vL');
define('LOGGED_IN_SALT',   '.CP)j`2$$[{j=RrV|^b:|b{.ojem7p507mHKt19RUW_| OrQ$:ZU7$X_}Uczh/M$');
define('NONCE_SALT',       'qksQ_]ZfK-XFc)_{x<+<lI/B+|ouwD/-vI-U+AlWN{h0Sm[XLTD<X)k:ml]5n=_H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
