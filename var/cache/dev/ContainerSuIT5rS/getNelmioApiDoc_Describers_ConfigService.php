<?php

namespace ContainerSuIT5rS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Describers_ConfigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.describers.config' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'DescriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ExternalDocDescriber.php';

        return $container->privates['nelmio_api_doc.describers.config'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(['servers' => [0 => ['url' => 'http://localhost:12000', 'description' => 'Serveur de l\'api']], 'info' => ['title' => 'LookBook - API', 'description' => 'API Rest pour gérer les annonces de livres entre particulier', 'version' => '1.0.0'], 'components' => ['securitySchemes' => ['jwt' => ['type' => 'http', 'scheme' => 'Bearer', 'bearerFormat' => 'JWT']]], 'security' => [0 => ['jwt' => []]], 'paths' => ['/api/token' => ['post' => ['summary' => 'Create a new authentification token', 'tags' => [0 => 'Security'], 'security' => [], 'requestBody' => ['content' => ['application/json' => ['schema' => ['type' => 'object', 'properties' => ['username' => ['type' => 'string'], 'password' => ['type' => 'string']]]]]]]]]]);
    }
}
