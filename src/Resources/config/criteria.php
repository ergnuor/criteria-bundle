<?php
declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Ergnuor\Criteria\ConfigBuilder\ConfigBuilder;

return static function (ContainerConfigurator $container) {

    $container->services()
        ->set('ergnuor.criteria.config_builder', ConfigBuilder::class)

    ;
};
