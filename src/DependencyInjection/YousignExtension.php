<?php

namespace Accessap\YousignComponent\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class YousignExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('yousign.endpoint.files', $config['endpoint']['files']);
        $container->setParameter('yousign.endpoint.procedures', $config['endpoint']['procedures']);
        $container->setParameter('yousign.endpoint.signature_uis', $config['endpoint']['signature_uis']);
        $container->setParameter('yousign.api_token', $config['api_token']);

        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__) . '/../config'));
        $loader->load('services.yml');
    }
}
