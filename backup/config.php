<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/finerlabel_new/cms/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/finerlabel_new/cms/');

// DIR
define('DIR_APPLICATION', '/var/www/html/finerlabel_new/cms/catalog/');
define('DIR_SYSTEM', '/var/www/html/finerlabel_new/cms/system/');
define('DIR_IMAGE', '/var/www/html/finerlabel_new/cms/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'fl_new');
define('DB_PORT', '3306');
define('DB_PREFIX', 'flnew_');