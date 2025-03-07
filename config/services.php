<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Flow\ETL\Flow;

return static function(ContainerConfigurator $container): void {
    $container->services()
        ->set('flow.data_frame', Flow::class)
        ->args([
            null,
        ]);
};
