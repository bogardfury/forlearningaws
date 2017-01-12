<?php

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
define('AUTH_KEY',         ';7)X pq.e![Pd&~8;D-y(`)DF~|$|R26@cG6^fmGLiE9$EI8FVbf4)=2&r^waaT.');
define('SECURE_AUTH_KEY',  '+Vu[us=hiT~fCFqJ>U^i(DL-( CW`!3/o%P,$U[>$PVa/*cjK:;R-&Pcko%xnhim');
define('LOGGED_IN_KEY',    ' SK?pG?en, eEr=/.<$ RAM@}d=>x!..dAhBj.bcV)wJ80`Nc~l{.s&1xs[4g%IC');
define('NONCE_KEY',        '+zqs]E8 zJCR}mFx`AhukpXz&g`aW7Ifiyg0C%gTw_iXZEI.`vlG.5wof;R>H$n_');
define('AUTH_SALT',        'S~-zes`iKEbj;r0ALPO8d`wypc8I}Ndk4>?n!$lpeo.$CZ;ly&y(~2iIOvU&u;gg');
define('SECURE_AUTH_SALT', '&n^oS~i!*ks^XHtj:-h)kNr>?#i>)y)t.Ozu.}OFj=xT:F] !,]kJ1`x[p_:BH0p');
define('LOGGED_IN_SALT',   'P)J3K&Qfwsf%a`)LQea<7 jx[nZqRNm^2v(-VShi)W@Nb5go86bPa<k~D5A~m{u!');
define('NONCE_SALT',       '.6i[.dXP^4^2GhFLtv27f4NWX4oU2E:0.,`-dd2X1%sxNn_Dh|U(O2 p)-Ads_cS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';