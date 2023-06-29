<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SqIFxEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._sqIFxE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._sqIFxE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator._sqIFxE.App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator._sqIFxE": it references class "App\\Entity\\Client" but no such service exists.'],
        ], [
            'client' => 'App\\Entity\\Client',
        ]);
    }
}
