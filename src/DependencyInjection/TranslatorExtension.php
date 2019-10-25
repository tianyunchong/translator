<?php
/**
 * User: tianyunchong
 * Date: 2019/10/24
 * Time: 15:51
 */
namespace Van\Translation\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Van\Translation\FileLoader;
use Illuminate\Filesystem\Filesystem;


class TranslatorExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(\dirname(__DIR__) . '/Resources/config'));
        $loader->load('services.yaml');
        $container->setParameter("translation.path", BASE_PATH . '/resources/lang');
    }

      public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration($container->getParameter('kernel.debug'));
    }

}
