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
define( 'DB_NAME', 'quotesondev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^.#5a|.bTLrZ.-L==%{tB{1XpM`}WDqiqeDKjgkPE0E.nVZfQM4v27r_|7CL[=FQ' );
define( 'SECURE_AUTH_KEY',  'JK1u^*(BFDcXH<Sg:]CI!0Il<0zf9SwZc3hUC8nZlFXc~qNa>BWBH|n:=L~Z_72o' );
define( 'LOGGED_IN_KEY',    'A]rO,+wAV@pSqOzTNg04tdcM&F8_-KmdR,veb9z~C}If4X9!,v!fdAfCUMk`N`~_' );
define( 'NONCE_KEY',        '59n:Kn=n`O*EroC?Um<666[c!X;O4R;gfK5f2Chax3O068,dT+_+!Kqh/aeP0LiI' );
define( 'AUTH_SALT',        'D*vTeAbw+Q|~;u!c1db4]h$V[8%?78lG-T0jTSUYHND1I6z9^rm/doR 4@s1T#u+' );
define( 'SECURE_AUTH_SALT', ',gXG7|r}1025DT!-/x[&DpM!/U:v_^:m6_VMplrds2bhV_H8.OKM;6bM*VEy;Em)' );
define( 'LOGGED_IN_SALT',   'ea1i*L,P93n<-1uf;+q`wab.~1rn`OXz<6#Nt5G9R5{)Oio7PEUL*2}g_z1m,Fsp' );
define( 'NONCE_SALT',       '-nIhaFMv[clqm}onnJ7B ZnD5>#jyl]|0h=fU`[63s@-P=oU le{bn+:PBySA&Rw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
