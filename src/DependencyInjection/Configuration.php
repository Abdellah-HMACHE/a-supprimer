<?php

namespace Accessap\YousignComponent\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('yousign');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->arrayNode('endpoint')
            ->children()
            ->variableNode('files')->end()
            ->variableNode('procedures')->end()
            ->variableNode('signature_uis')->end()
            ->end();
        $rootNode->children()->variableNode('api_token')->end();


        return $treeBuilder;
    }
}
