<?php
/**
 * Drupal 7 **
 * Este es un fichero de configuración para el entorno de desarrollo de ejemplo.
 * Es recomendable copiarlo a sites/default y reemplazar las variables que necesitemos
 * con los valores de nuestro proyecto.
 *
 **/

//Por si queremos sobreescribir memoria y tiempo de ejecución
//ini_set('memory_limit','800M');
//ini_set('max_execution_time','3000');

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'drupal',           // MYSQL_DATABASE
  'username' => 'drupal',           // MYSQL_USER
  'password' => 'drupal',           // MYSQL_PASSWORD
  'host' => 'tu_proyecto_mysql_1',  //Corresponde a ${PROJECT_NAME}_mysql_1
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
$conf['stage_file_proxy_origin'] = "http://isdi.education/";
$conf['theme_debug'] = TRUE; //activo theme_debug

/**
 * Configuración de caché REDIS (por defecto)
 **/
$conf['redis_client_interface'] = 'PhpRedis'; // Can be "Predis".
$conf['redis_client_host']      = 'tu_proyecto_redis_1';  // ${PROJECT_NAME}_redis_1
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
//  'tu_proyecto_memcached_1:11211' => 'default',  //${PROJECT_NAME}_memcached_1
//);
//$conf['memcache_bins'] = array('cache' => 'default');
//$conf['memcache_persistent'] = TRUE;
//$conf['memcache_key_prefix'] = 'tu_proyecto';   //${PROJECT_NAME}
