<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFidryAliceDataFixtures_Doctrine_PersisterLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fidry_alice_data_fixtures.doctrine.persister_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\PersisterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] = $container->createProxy('PersisterLoader_c8a8e24', function () use ($container) {
                return \PersisterLoader_c8a8e24::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PersisterLoader.php';

        return new \Fidry\AliceDataFixtures\Loader\PersisterLoader(($container->privates['fidry_alice_data_fixtures.loader.simple'] ?? $container->load('getFidryAliceDataFixtures_Loader_SimpleService')), ($container->services['fidry_alice_data_fixtures.persistence.persister.doctrine'] ?? $container->load('getFidryAliceDataFixtures_Persistence_Persister_DoctrineService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), []);
    }
}
