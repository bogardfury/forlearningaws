<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 */
  
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myDBtest');
/** MySQL database username */
define('DB_USER', 'andrewo');
/** MySQL database password */
define('DB_PASSWORD', 'this4You!');
/** MySQL hostname */
define('DB_HOST', 'mytestdb.c7umwrirwvhl.us-east-1.rds.amazonaws.com:3306');


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);