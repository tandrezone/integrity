<?php

namespace Container7l9i1YM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChallengeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Utils\Challenge' shared autowired service.
     *
     * @return \App\Utils\Challenge
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Utils/Challenge.php';

        return $container->privates['App\\Utils\\Challenge'] = new \App\Utils\Challenge();
    }
}
