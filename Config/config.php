<?php

$module_config = array();

/*
|--------------------------------------------------------------------------
| Get Modules Settings
|--------------------------------------------------------------------------
*/
$path = __DIR__."/../settings.json";
if (File::exists($path)) {
    $file = File::get($path);
    $plugin_config = json_decode($file);
    $module_config = (array)$plugin_config;
}

/*
|--------------------------------------------------------------------------
| Custom Modules Settings
|--------------------------------------------------------------------------
*/

$modules_settings = [];

$module_config = array_merge($module_config, $modules_settings);

return $module_config;
