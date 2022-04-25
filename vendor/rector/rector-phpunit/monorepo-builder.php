<?php

declare (strict_types=1);
namespace RectorPrefix20220425;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use RectorPrefix20220425\Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use RectorPrefix20220425\Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    // @see https://github.com/symplify/monorepo-builder#6-release-flow
    $rectorConfig->rule(\RectorPrefix20220425\Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker::class);
    $rectorConfig->rule(\RectorPrefix20220425\Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker::class);
};
