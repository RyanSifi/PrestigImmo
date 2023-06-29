<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CE9uoZVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cE9uoZV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cE9uoZV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\ClientRepository',
        ]);
    }
}
