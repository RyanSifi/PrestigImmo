<?php

namespace ContainerJawL2ik;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AeosDtNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AeosDtN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AeosDtN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'realProperty' => ['privates', '.errored..service_locator.AeosDtN.App\\Entity\\RealProperty', NULL, 'Cannot autowire service ".service_locator.AeosDtN": it references class "App\\Entity\\RealProperty" but no such service exists.'],
            'repository' => ['privates', 'App\\Repository\\OfferRepository', 'getOfferRepositoryService', true],
        ], [
            'realProperty' => 'App\\Entity\\RealProperty',
            'repository' => 'App\\Repository\\OfferRepository',
        ]);
    }
}
