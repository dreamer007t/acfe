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
define( 'DB_NAME', 'acfe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '_9xbLVqHg;]d<eUI}~+SLOpPqGRM3E}&%Tp{FGXef~B]rX}]##Fd[^aj6RxBY*Wz' );
define( 'SECURE_AUTH_KEY',   '3||n<?-v#kNMiq[;u]|0x_5Znkh/rJuIcH~)e~Z#/~+eSLcabP$@*R$3|*7,/g5^' );
define( 'LOGGED_IN_KEY',     'jshW%=]fS{7-RdWHfw*Uk]1agHr)~Xx40;f)np.m^gDArgy@^mE_h}n[k%sz(EXD' );
define( 'NONCE_KEY',         '[qF}HrH<&9GVz4-a4:<?Xw&.!rdW`K94s/~+u:-v@?:[mq71u(rijPk#24,d`@Lc' );
define( 'AUTH_SALT',         'A%t;]I.~F?XH@@=};-&mO{#^`8q[5v84r<z/bYL}jj[|/HF-!TrR]SDK*pBjE>&q' );
define( 'SECURE_AUTH_SALT',  ']mP>,0V2HjqK@~~P_*.M|nxM`|~?`!>Dec1|0keP7- TGKQ.@u!wDiT{(ZFlEE$)' );
define( 'LOGGED_IN_SALT',    '+0ZACCUQ@@B:@)<Ka~@a~>RnA9!p,~.V}lo*B1|]LeO%I@Qm15ebC0Oniv_kM%uI' );
define( 'NONCE_SALT',        '{xVY0Kq*}I>.$dh4/B2a8Slpb>U?Eh`6l]DR0^HF[#51ge2~ki>)neR[?:Jfc_@S' );
define( 'WP_CACHE_KEY_SALT', '`[K0e$E.D4<cUf+0IiZH}z=:<3`ejYYX}mSew~IYA1y168mQR5mb*J)gx1G>j?m=' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
