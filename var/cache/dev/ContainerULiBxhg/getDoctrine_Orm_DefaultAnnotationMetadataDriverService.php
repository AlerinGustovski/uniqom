<?php

namespace ContainerULiBxhg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultAnnotationMetadataDriverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'MappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'CompatibilityAnnotationDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'ColocatedMappingDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AnnotationDriver.php';

        return $container->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity')]);
    }
}
