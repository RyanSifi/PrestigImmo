<?php

namespace ContainerJawL2ik;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A19SIEqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a19SIEq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a19SIEq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offer' => ['privates', '.errored..service_locator.a19SIEq.App\\Entity\\Offer', NULL, 'Cannot autowire service ".service_locator.a19SIEq": it references class "App\\Entity\\Offer" but no such service exists.'],
            'stripe' => ['privates', 'Stripe\\StripeClient', 'getStripeClientService', true],
        ], [
            'offer' => 'App\\Entity\\Offer',
            'stripe' => 'Stripe\\StripeClient',
        ]);
    }
}