<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u633686771_yzISB' );

/** MySQL database username */
define( 'DB_USER', 'u633686771_PiPES' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hOeyI4aMH7' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'N-jK.v52V<BhXGT2F-{/}|YJt2w!.L8#NnqA+.3I3QAFB, eRG-14wo^}()*crs<' );
define( 'SECURE_AUTH_KEY',   '/xxlA+$w_G}2`!=x`d2{:+5Ko4:KWB|*?A`A.w_?8IE!^|N}RiTmm5i;PW(mN9O$' );
define( 'LOGGED_IN_KEY',     'i~7ZOoe5EmW2Wo.4v9Ukn)Ixrto=I:jEM=Dzb.*~Nd$=LD%kb%3|$?i}g2C|]dT>' );
define( 'NONCE_KEY',         'w:gDag8ooc&~#k}@^r ~jLx^+/<O_;%5ob`#(]n65d jV01Ta4ch2%rOTGH Xlsa' );
define( 'AUTH_SALT',         '_.]_R|Rdt.@E_t?#x-hsJAVfjy{%l3A4!>VSuvMm;b;`AZc<h:KZpMg&tJk v6K9' );
define( 'SECURE_AUTH_SALT',  '+v`[.{9ZDIrx}EWE.wiTXd[-m.I)nVN=Im&<o#u{::q<t@(ZNvL?8^S:6V!cYw32' );
define( 'LOGGED_IN_SALT',    '#Z:s7Bz+2l YCykK@y8( |&g2_`>c Bcn_5W_RFow}%3F45Wv+yn|f1>mWxeV/U+' );
define( 'NONCE_SALT',        'Mm3hvUJROto(h;Pz2# 71J4g%p+H}]KIJQMX=xZqOMUzKoq~O#teHE,sqwW]4;e-' );
define( 'WP_CACHE_KEY_SALT', 'FnA`&Ha}M:G*j6mBzujn9[>@-9DL(zfXPYE`6Yq{JH++j|b`h!umi,bzE_J]>bO>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
