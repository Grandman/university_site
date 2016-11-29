<?php

// ** MySQL settings - You can get this info from your web host ** //
$url = parse_url(getenv('CLEARDB_DATABASE_URL') ? getenv('CLEARDB_DATABASE_URL'): 'mysql://root:root@localhost/wp_vagrantf?reconnect=true');

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'h|+FyiQ/{O>tts&LB@_97G;|?^W})Buo0YG0.6O)!B1ploM)&-Z1#AO(pLbr3baX');
define('SECURE_AUTH_KEY',  '|I#aX<W21Ag/l/}_WT7=1>LbXZ9DP.T)9BMyc![kN aeH[`]6=js}ojM{;g$j+p?');
define('LOGGED_IN_KEY',    '2{0!D!>Y=pEGsO_P_VG?/EfD]RGf>QwUA+%Zx$uM}AfP*B,z0LonS-*g|.EavH]#');
define('NONCE_KEY',        'YVs~N_~U+v.fZ gxG`BZ^,u*}k%!uD0gj.7mAA)514g^i@E=so#|r[A_e;jCHBU-');
define('AUTH_SALT',        'JBhd&t+<no{+vtv-TY@Y^#~2gxl=bCb(^Xk4YM65,HOVpLvi=HS%CO/m<kL7Q;)T');
define('SECURE_AUTH_SALT', '&LuR/jz;SrnoR<H0%wepPCcx=f<)+m~ma6u?pF=pCd+%l`L|apPV,<]Qj&OtA,xK');
define('LOGGED_IN_SALT',   '`2/,0K_]2_v;gLiV-z2RE2h}wd_ZQPfF%HEg00PD?w*GY.4[}Y?S;fy=pU;>T@j=');
define('NONCE_SALT',       '0+~?qZi-@G|rtR6]+4Q>j!Lgth^4k+A),<@HrwUN81[k=S=a`[=~|qP!Sd~xI`)G');


$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
