<?php
// HTTP
define('HTTP_SERVER', 'http://YOURDOMAIN/');

// HTTPS
define('HTTPS_SERVER', 'http://YOURDOMAIN/');

// DIR
define('DIR_APPLICATION', '/var/www/html/catalog/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_LANGUAGE', '/var/www/html/catalog/language/');
define('DIR_TEMPLATE', '/var/www/html/catalog/view/theme/');
define('DIR_CONFIG', '/var/www/html/system/config/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_CACHE', '/var/www/html/system/storage/cache/');
define('DIR_DOWNLOAD', '/var/www/html/system/storage/download/');
define('DIR_LOGS', '/var/www/html/system/storage/logs/');
define('DIR_MODIFICATION', '/var/www/html/system/storage/modification/');
define('DIR_UPLOAD', '/var/www/html/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'docker.cmmcfluxl1um.sa-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'docker');
define('DB_PASSWORD', 'opencartpass');
define('DB_DATABASE', 'OPENCART');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
