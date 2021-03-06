<?php

namespace Container7l9i1YM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnalizerCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Command\AnalizerCommand' shared autowired service.
     *
     * @return \App\Command\AnalizerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/CheckCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Utils/Challenge.php';

        $container->privates['App\\Command\\AnalizerCommand'] = $instance = new \App\Command\AnalizerCommand(NULL, ($container->privates['App\\Service\\RequestService'] ?? $container->load('getRequestServiceService')), ($container->privates['App\\Service\\StoreService'] ?? $container->load('getStoreServiceService')), ($container->privates['App\\Utils\\Challenge'] ?? ($container->privates['App\\Utils\\Challenge'] = new \App\Utils\Challenge())));

        $instance->setName('url:analizer');

        return $instance;
    }
}
