<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EGTcH20Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eGTcH20' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eGTcH20'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\OfferController::denied' => ['privates', '.service_locator.8qmG1uO', 'get_ServiceLocator_8qmG1uOService', true],
            'App\\Controller\\Admin\\OfferController::list' => ['privates', '.service_locator.nIa7TPK', 'get_ServiceLocator_NIa7TPKService', true],
            'App\\Controller\\Admin\\OfferController::validate' => ['privates', '.service_locator.8qmG1uO', 'get_ServiceLocator_8qmG1uOService', true],
            'App\\Controller\\Front\\ClientController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\Front\\ClientController::profile' => ['privates', '.service_locator.cE9uoZV', 'get_ServiceLocator_CE9uoZVService', true],
            'App\\Controller\\Front\\ClientController::registration' => ['privates', '.service_locator.NY.qZnD', 'get_ServiceLocator_NY_QZnDService', true],
            'App\\Controller\\Front\\ClientController::welcome' => ['privates', '.service_locator._sqIFxE', 'get_ServiceLocator_SqIFxEService', true],
            'App\\Controller\\Front\\HomeController::home' => ['privates', '.service_locator.cE70c2y', 'get_ServiceLocator_CE70c2yService', true],
            'App\\Controller\\Front\\HomeController::search' => ['privates', '.service_locator.cE70c2y', 'get_ServiceLocator_CE70c2yService', true],
            'App\\Controller\\Front\\OfferController::cancelCheckout' => ['privates', '.service_locator.a6piHQO', 'get_ServiceLocator_A6piHQOService', true],
            'App\\Controller\\Front\\OfferController::checkout' => ['privates', '.service_locator.a19SIEq', 'get_ServiceLocator_A19SIEqService', true],
            'App\\Controller\\Front\\OfferController::confirm' => ['privates', '.service_locator.a6piHQO', 'get_ServiceLocator_A6piHQOService', true],
            'App\\Controller\\Front\\OfferController::make' => ['privates', '.service_locator.AeosDtN', 'get_ServiceLocator_AeosDtNService', true],
            'App\\Controller\\Front\\OfferController::validateCheckout' => ['privates', '.service_locator.8qmG1uO', 'get_ServiceLocator_8qmG1uOService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Admin\\OfferController:denied' => ['privates', '.service_locator.8qmG1uO', 'get_ServiceLocator_8qmG1uOService', true],
            'App\\Controller\\Admin\\OfferController:list' => ['privates', '.service_locator.nIa7TPK', 'get_ServiceLocator_NIa7TPKService', true],
            'App\\Controller\\Admin\\OfferController:validate' => ['privates', '.service_locator.8qmG1uO', 'get_ServiceLocator_8qmG1uOService', true],
            'App\\Controller\\Front\\ClientController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\Front\\ClientController:profile' => ['privates', '.service_locator.cE9uoZV', 'get_ServiceLocator_CE9uoZVService', true],
            'App\\Controller\\Front\\ClientController:registration' => ['privates', '.service_locator.NY.qZnD', 'get_ServiceLocator_NY_QZnDService', true],
            'App\\Controller\\Front\\ClientController:welcome' => ['privates', '.service_locator._sqIFxE', 'get_ServiceLocator_SqIFxEService', true],
            'App\\Controller\\Front\\HomeController:home' => ['privates', '.service_locator.cE70c2y', 'get_ServiceLocator_CE70c2yService', true],
            'App\\Controller\\Front\\HomeController:search' => ['privates', '.service_locator.cE70c2y', 'get_ServiceLocator_CE70c2yService', true],
            'App\\Controller\\Front\\OfferController:cancelCheckout' => ['privates', '.service_locator.a6piHQO', 'get_ServiceLocator_A6piHQOService', true],
            'App\\Controller\\Front\\OfferController:checkout' => ['privates', '.service_locator.a19SIEq', 'get_ServiceLocator_A19SIEqService', true],
            'App\\Controller\\Front\\OfferController:confirm' => ['privates', '.service_locator.a6piHQO', 'get_ServiceLocator_A6piHQOService', true],
            'App\\Controller\\Front\\OfferController:make' => ['privates', '.service_locator.AeosDtN', 'get_ServiceLocator_AeosDtNService', true],
            'App\\Controller\\Front\\OfferController:validateCheckout' => ['privates', '.service_locator.8qmG1uO', 'get_ServiceLocator_8qmG1uOService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Admin\\OfferController::denied' => '?',
            'App\\Controller\\Admin\\OfferController::list' => '?',
            'App\\Controller\\Admin\\OfferController::validate' => '?',
            'App\\Controller\\Front\\ClientController::login' => '?',
            'App\\Controller\\Front\\ClientController::profile' => '?',
            'App\\Controller\\Front\\ClientController::registration' => '?',
            'App\\Controller\\Front\\ClientController::welcome' => '?',
            'App\\Controller\\Front\\HomeController::home' => '?',
            'App\\Controller\\Front\\HomeController::search' => '?',
            'App\\Controller\\Front\\OfferController::cancelCheckout' => '?',
            'App\\Controller\\Front\\OfferController::checkout' => '?',
            'App\\Controller\\Front\\OfferController::confirm' => '?',
            'App\\Controller\\Front\\OfferController::make' => '?',
            'App\\Controller\\Front\\OfferController::validateCheckout' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\OfferController:denied' => '?',
            'App\\Controller\\Admin\\OfferController:list' => '?',
            'App\\Controller\\Admin\\OfferController:validate' => '?',
            'App\\Controller\\Front\\ClientController:login' => '?',
            'App\\Controller\\Front\\ClientController:profile' => '?',
            'App\\Controller\\Front\\ClientController:registration' => '?',
            'App\\Controller\\Front\\ClientController:welcome' => '?',
            'App\\Controller\\Front\\HomeController:home' => '?',
            'App\\Controller\\Front\\HomeController:search' => '?',
            'App\\Controller\\Front\\OfferController:cancelCheckout' => '?',
            'App\\Controller\\Front\\OfferController:checkout' => '?',
            'App\\Controller\\Front\\OfferController:confirm' => '?',
            'App\\Controller\\Front\\OfferController:make' => '?',
            'App\\Controller\\Front\\OfferController:validateCheckout' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
