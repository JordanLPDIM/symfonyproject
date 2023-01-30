<?php

namespace ContainerHoUq1ps;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_SerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Debug\TraceableSerializer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'));
        $b = ($container->privates['serializer.data_collector'] ??= new \Symfony\Component\Serializer\DataCollector\SerializerDataCollector());
        $c = ($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService'));

        $d = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($c);
        $e = ($container->privates['property_info'] ?? $container->getPropertyInfoService());

        if (isset($container->privates['debug.serializer'])) {
            return $container->privates['debug.serializer'];
        }
        $f = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($c);

        return $container->privates['debug.serializer'] = new \Symfony\Component\Serializer\Debug\TraceableSerializer(new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer($a), $b), 1 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer(), $b), 2 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), $b), 3 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\UidNormalizer(), $b), 4 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), $b), 5 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $d), $b), 6 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer(new \Symfony\Component\Serializer\Normalizer\PropertyNormalizer($c, $d, $e, $f, NULL)), $b), 7 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), $b), 8 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), $b), 9 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer(), $b), 10 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer(), $b), 11 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($container->privates['mime_types'] ?? $container->load('getMimeTypesService'))), $b), 12 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL), $b), 13 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), $b), 14 => new \Symfony\Component\Serializer\Debug\TraceableNormalizer(new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($c, $d, $a, $e, $f, NULL), $b)], [0 => new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\XmlEncoder(), $b), 1 => new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncoder(NULL, NULL), $b), 2 => new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL), $b), 3 => new \Symfony\Component\Serializer\Debug\TraceableEncoder(new \Symfony\Component\Serializer\Encoder\CsvEncoder(), $b)]), $b);
    }
}
