<?php

namespace ContainerG5h8Lmq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBaseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BaseController' shared autowired service.
     *
     * @return \App\Controller\BaseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Utils/Challenge.php';

        $container->services['App\\Controller\\BaseController'] = $instance = new \App\Controller\BaseController(($container->privates['App\\Service\\RequestService'] ?? $container->load('getRequestServiceService')), ($container->privates['App\\Utils\\Challenge'] ?? ($container->privates['App\\Utils\\Challenge'] = new \App\Utils\Challenge())));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\BaseController', $container));

        return $instance;
    }
}
