<?php

namespace ContainerLfNfrqY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportProductsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\ImportProductsCommand' shared autowired service.
     *
     * @return \App\Command\ImportProductsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/ImportProductsCommand.php';

        $container->privates['App\\Command\\ImportProductsCommand'] = $instance = new \App\Command\ImportProductsCommand(($container->services['App\\Message\\ProductMessageDispatcher'] ?? $container->load('getProductMessageDispatcherService')));

        $instance->setName('app:import-products');
        $instance->setAliases(['app:import-products']);
        $instance->setDescription('Обработка файла');

        return $instance;
    }
}
