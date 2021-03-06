<?php
/**
 * Drupal 7 **
 * Este es un fichero de configuración para el entorno de desarrollo de ejemplo.
 * Es recomendable copiarlo a sites/default, renombrarlo a setttings.local.php y reemplazar
 * las variables que necesitemos con los valores de nuestro proyecto.
 *
 * Hay que tener en el settings.php de drupal el siguiente snippet
 *
 * if (file_exists(dirname(__FILE__).'/settings.local.php')) {
 *   include(dirname(__FILE__).'/settings.local.php');
 * }
 **/

//Por si queremos sobreescribir memoria y tiempo de ejecución
//ini_set('memory_limit','800M');
//ini_set('max_execution_time','3000');

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'tu_proyecto',           // MYSQL_DATABASE
  'username' => 'tu_proyecto',           // MYSQL_USER
  'password' => 'tu_proyecto',           // MYSQL_PASSWORD
  'host' => 'mysql',
);
/**
 * Desactivamos cacheos y CDN
 **/
$conf['cdn_status'] = 2;
$conf['cache'] = 0;
$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;
$conf['page_compression'] = 1;
$conf['page_cache_maximum_age'] = 0;

/**
 * Devel
 **/
$conf['stage_file_proxy_origin'] = "http://files.tu_proyecto.com/";
$conf['theme_debug'] = TRUE; //activo theme_debug

/**
 * Configuración de caché REDIS (por defecto)
 **/
$conf['redis_client_interface'] = 'PhpRedis'; // Can be "Predis".
$conf['redis_client_host']      = 'redis';
$conf['lock_inc']               = 'sites/all/modules/contrib/redis/redis.lock.inc';
$conf['path_inc']               = 'sites/all/modules/contrib/redis/redis.path.inc';
$conf['cache_backends'][]       = 'sites/all/modules/contrib/redis/redis.autoload.inc';
$conf['cache_default_class']    = 'Redis_Cache';

/**
 * Otras configuraciones
 **/

$conf['file_temporary_path'] = '/tmp';
//$conf['image_allow_insecure_derivatives'] = TRUE;
//$conf['page_cache_without_database'] = TRUE;
//$conf['page_cache_invoke_hooks'] = FALSE;


//$conf['cache_backends'][] = 'sites/all/modules/memcache/memcache.inc';
//$conf['lock_inc'] = 'sites/all/modules/contrib/memcache/memcache-lock.inc';
//$conf['cache_default_class'] = 'MemCacheDrupal';
//$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
//$conf['cache_class_cache_page'] = 'MemCacheDrupal';
//$conf['memcache_servers'] = array(
//  'memcached:11211' => 'default',  //memcached
//);
//$conf['memcache_bins'] = array('cache' => 'default');
//$conf['memcache_persistent'] = TRUE;
//$conf['memcache_key_prefix'] = 'tu_proyecto';   //${PROJECT_NAME}
