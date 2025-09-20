<?php

// Basic Redis connection settings (module will be enabled later)
$settings['redis.connection']['host'] = 'valkey';
$settings['redis.connection']['port'] = '6379';
$settings['redis.connection']['password'] = 'bad-password';
$settings['redis.connection']['base'] = 0;
$settings['redis.connection']['interface'] = 'PhpRedis';

$settings['trusted_host_patterns'] = array(
    '\\.localhost$', '\\.local$', '\\.loc$'
);
