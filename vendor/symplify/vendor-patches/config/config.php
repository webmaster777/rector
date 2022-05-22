<?php

declare (strict_types=1);
namespace RectorPrefix20220522;

use RectorPrefix20220522\SebastianBergmann\Diff\Differ;
use RectorPrefix20220522\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use RectorPrefix20220522\Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use RectorPrefix20220522\Symplify\PackageBuilder\Composer\VendorDirProvider;
use RectorPrefix20220522\Symplify\PackageBuilder\Yaml\ParametersMerger;
use RectorPrefix20220522\Symplify\SmartFileSystem\Json\JsonFileSystem;
use RectorPrefix20220522\Symplify\VendorPatches\Console\VendorPatchesApplication;
use function RectorPrefix20220522\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('RectorPrefix20220522\Symplify\\VendorPatches\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Kernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\RectorPrefix20220522\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->args(['$addLineNumbers' => \true]);
    $services->set(\RectorPrefix20220522\SebastianBergmann\Diff\Differ::class)->args(['$outputBuilder' => \RectorPrefix20220522\Symfony\Component\DependencyInjection\Loader\Configurator\service(\RectorPrefix20220522\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)]);
    $services->set(\RectorPrefix20220522\Symplify\PackageBuilder\Composer\VendorDirProvider::class);
    $services->set(\RectorPrefix20220522\Symplify\SmartFileSystem\Json\JsonFileSystem::class);
    // for autowired commands
    $services->alias(\RectorPrefix20220522\Symfony\Component\Console\Application::class, \RectorPrefix20220522\Symplify\VendorPatches\Console\VendorPatchesApplication::class);
    $services->set(\RectorPrefix20220522\Symplify\PackageBuilder\Yaml\ParametersMerger::class);
};
