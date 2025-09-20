<?php

// Redis cache backend configuration - loaded after redis module is enabled

// For Drupal 11, modules are in web/modules/contrib
$contrib_path = is_dir('web/modules/contrib')
  ? 'web/modules/contrib'
  : (is_dir('sites/all/modules/contrib') 
      ? 'sites/all/modules/contrib' 
      : 'sites/all/modules');

// Include Redis services YAML file
if (file_exists($contrib_path . '/redis/example.services.yml')) {
  $settings['container_yamls'][] = $contrib_path . '/redis/example.services.yml';
}

// Configure cache backends to use Redis
$settings['cache']['default'] = 'cache.backend.redis';
$settings['cache']['bins']['bootstrap'] = 'cache.backend.chainedfast';
$settings['cache']['bins']['discovery'] = 'cache.backend.chainedfast';
$settings['cache']['bins']['config'] = 'cache.backend.chainedfast';