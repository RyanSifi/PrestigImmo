<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileParser_RuntimeCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_parser.runtime_cache' shared service.
     *
     * @return \Nelmio\Alice\Parser\RuntimeCacheParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'RuntimeCacheParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'ParserRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'ChainableParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'YamlParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'yaml'.\DIRECTORY_SEPARATOR.'Parser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'PhpParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'Chainable'.\DIRECTORY_SEPARATOR.'JsonParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'hautelook'.\DIRECTORY_SEPARATOR.'alice-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Alice'.\DIRECTORY_SEPARATOR.'FileLocator'.\DIRECTORY_SEPARATOR.'KernelFileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FileLocator'.\DIRECTORY_SEPARATOR.'DefaultFileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'IncludeProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Parser'.\DIRECTORY_SEPARATOR.'IncludeProcessor'.\DIRECTORY_SEPARATOR.'DefaultIncludeProcessor.php';

        $a = new \Hautelook\AliceBundle\Alice\FileLocator\KernelFileLocator(new \Nelmio\Alice\FileLocator\DefaultFileLocator(), ($container->services['kernel'] ?? $container->get('kernel', 1)));

        return $container->privates['nelmio_alice.file_parser.runtime_cache'] = new \Nelmio\Alice\Parser\RuntimeCacheParser(new \Nelmio\Alice\Parser\ParserRegistry([0 => new \Nelmio\Alice\Parser\Chainable\YamlParser(new \Symfony\Component\Yaml\Parser()), 1 => new \Nelmio\Alice\Parser\Chainable\PhpParser(), 2 => new \Nelmio\Alice\Parser\Chainable\JsonParser()]), $a, new \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor($a));
    }
}
