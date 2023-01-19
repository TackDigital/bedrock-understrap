<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? true);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('DISALLOW_INDEXING', true);

ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
// Config::define('DISALLOW_FILE_MODS', false);

## more ram and less more security
Config::define('WP_POST_REVISIONS', false);
Config::define('WP_MEMORY_LIMIT', '256M');
Config::define('WP_MAX_MEMORY_LIMIT', '512M');

## set the environment type (https://make.wordpress.org/core/2020/08/27/wordpress-environment-types/)
Config::define('WP_ENVIRONMENT_TYPE', 'local');
