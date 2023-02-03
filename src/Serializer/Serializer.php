<?php

namespace Accessap\YousignComponent\Serializer;

use Accessap\YousignComponent\Serializer\Normalizer\HeaderNormalizer;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;
use Easyblue\YouSign\Exception\NormalizationTypeException;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;

/**
 * Class Serializer
 * @package Accessap\YousignComponent\Serializer
 */
class Serializer
{
    protected SymfonySerializer $serializer;

    public function __construct()
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $objectNormalizer     = new ObjectNormalizer($classMetadataFactory, new MetadataAwareNameConverter($classMetadataFactory), null, new ReflectionExtractor());

        $this->serializer = new SymfonySerializer([
            $objectNormalizer,
            new ArrayDenormalizer(),
            new HeaderNormalizer(),
        ], [
            new JsonEncoder(),
            new JsonDecode(),
        ]);
    }

    /** @return mixed */
    public function deserialize(string $data, string $entityClass, $context = [])
    {
        return $this->serializer->deserialize($data, $entityClass, JsonEncoder::FORMAT, $context);
    }

    /** @param mixed $object */
    public function serialize($object, $context = []): string
    {
        return $this->serializer->serialize($object, JsonEncoder::FORMAT, $context);
    }

    /** @param mixed $data */
    public function normalize($data, $context = []): array
    {
        return $this->serializer->normalize(
            $data,
            null,
            $context ? array_merge($context, [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]) : [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]
        );
    }
}
