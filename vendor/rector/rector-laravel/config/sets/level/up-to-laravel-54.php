<?php

declare (strict_types=1);
namespace RectorPrefix20220425;

use Rector\Config\RectorConfig;
use Rector\Laravel\Set\LaravelLevelSetList;
use Rector\Laravel\Set\LaravelSetList;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([\Rector\Laravel\Set\LaravelSetList::LARAVEL_54, \Rector\Laravel\Set\LaravelLevelSetList::UP_TO_LARAVEL_53]);
};
