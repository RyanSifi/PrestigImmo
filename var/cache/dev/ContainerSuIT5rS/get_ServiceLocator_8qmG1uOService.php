<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8qmG1uOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8qmG1uO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8qmG1uO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offer' => ['privates', '.errored..service_locator.8qmG1uO.App\\Entity\\Offer', NULL, 'Cannot autowire service ".service_locator.8qmG1uO": it references class "App\\Entity\\Offer" but no such service exists.'],
            'repository' => ['privates', 'App\\Repository\\OfferRepository', 'getOfferRepositoryService', true],
        ], [
            'offer' => 'App\\Entity\\Offer',
            'repository' => 'App\\Repository\\OfferRepository',
        ]);
    }
}
