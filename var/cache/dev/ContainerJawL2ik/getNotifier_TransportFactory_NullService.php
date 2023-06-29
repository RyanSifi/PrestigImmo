<?php

namespace ContainerJawL2ik;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotifier_TransportFactory_NullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'notifier.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport\NullTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Transport/NullTransportFactory.php';

        return $container->privates['notifier.transport_factory.null'] = new \Symfony\Component\Notifier\Transport\NullTransportFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));
    }
}
