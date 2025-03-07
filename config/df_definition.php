<?php

declare(strict_types=1);

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;

return static function (DefinitionConfigurator $definition): void {
    $definition->rootNode()
        ->children()
            ->arrayNode('data_frame')
                ->children()
                    ->scalarNode('id')->defaultNull()->end()
                    ->scalarNode('serializer')->defaultNull()->end()
                    ->scalarNode('filesystem_table')->defaultNull()->end()
                    ->scalarNode('filesystem_streams')->defaultNull()->end()
                    ->scalarNode('optimizer')->defaultNull()->end()
                    ->scalarNode('caster')->defaultNull()->end()
                    ->scalarNode('put_input_into_rows')->defaultFalse()->end()
                    ->scalarNode('entry_factory')->defaultNull()->end()
                    ->scalarNode('cache_config')->defaultNull()->end()
                    ->scalarNode('sort_config')->defaultNull()->end()
                ->end()
            ->end()
        ->end()
    ;
};
