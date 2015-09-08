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
define('DB_NAME', 'giali_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(OJ3sn)ZC[_!#Z^i5h t-HVzApYv73p-a<8G/g$}d;T#mfb34pE0,!IM<,zi00u#');
define('SECURE_AUTH_KEY',  ':I|(bH86dqo/-|a@pi4Ymf[7}PQFC~aMVa$jO7LnXrnBj(!4V4 :X:;s3D8O@#WE');
define('LOGGED_IN_KEY',    'L?Tc7&0%DWZHo!cI0p6P/%XD.^C&}xU@$h|[Hj++lWhb#.tH*6UKt`B~3jMN`kEG');
define('NONCE_KEY',        'm8&SPi2s4dM3^_/l^_Do.k/Ny(I)r*X+VybM~9Xxau([Vg8a[Be^:VAl[kK7qbh9');
define('AUTH_SALT',        'txRp3|o{`-kd>5;-I-gtOnM#.U (<U%u[+>*.ieB;k^N`|PZ||DH!k||Wd-gOmW}');
define('SECURE_AUTH_SALT', 'EakDTv}w42tNVAmUZ)DQ]hZbF q-_hAjh,`FFo+??Y> $?.>bo*mpyOLy&B|?AN4');
define('LOGGED_IN_SALT',   'l[kjmE y8/n=/YEde2OCvGWgayi/|*<vSVk.;G-D8I+9F0TH)I-.+{i1ZUN;>~><');
define('NONCE_SALT',       '.j+i]~:0Ck+:,WPRMKUMHfe.D[KtbUDE~jGL^vL4y5/db$3g,~l$WLhn2?!k#z$(');

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

define('WP_ENV', 'development');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
