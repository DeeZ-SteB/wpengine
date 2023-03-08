<?php
# Database Configuration
define( 'DB_NAME', 'wp_neycasinostg' );
define( 'DB_USER', 'neycasinostg' );
define( 'DB_PASSWORD', 'BYOKD0e66hrUdbtlOKHA' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '21edCyzv#Q1[mg<>{zR<8.YNOm[-iHID60mmN|Q{e,c&,]u$.RD:+Ftf-IPjHfcc');
define('SECURE_AUTH_KEY',  'oEUh<RCm(j/JDD9t~Jn6XQJ<=/Jl3~Y&$Y~nQx<+k2ssG|>+DhEYCHkp1^|`&ks^');
define('LOGGED_IN_KEY',    '|M|7m+|S,CyL}4:eYEqNgcttJ@-H&[%hSJ86Mx3vJ7Vs82!mX--.g(k#1%63Fj~c');
define('NONCE_KEY',        'Y#);%odKQWydPii|A0M`tM.vxcHaPg2Tq%PQBQ|-{_hvaT+I:YYx[-B]dgIOVil6');
define('AUTH_SALT',        'K|HC}lK55+3<`arYGOBGbrW2Sh2-K;,9kc>j5$KGJ1`fmz)|3.:C>I$/HxtIma !');
define('SECURE_AUTH_SALT', 'p<r33WylV(zU=F9SoD74swS),TJ6>=Ovz}Aszi/pfzi^F+> ZfV|a)l:@Wm*+x?i');
define('LOGGED_IN_SALT',   '.GY0WF)5`D>gGVr`Z9,(T!;}H5R|~kF/9&~]PLuqs*+Tizo%dx ~CKWG8!Yov2FS');
define('NONCE_SALT',       '-q]$/,Mm$GFHW!#ckT9zo*+Wx(O5-|DQ$34ZPMhcRa--79$Yn&Ao>i17m^~>5E>z');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'neycasinostg' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '984324f94390a47cafe4ff6d8c7a15444feb3010' );

define( 'WPE_CLUSTER_ID', '101231' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'neycasinostg.wpengine.com', 1 => 'neycasinostg.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101231', );

$wpe_special_ips=array ( 0 => '35.198.134.74', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
