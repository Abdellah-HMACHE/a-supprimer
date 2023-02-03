<?php

namespace Accessap\YousignComponent\Serializer\Normalizer;

use Accessap\YousignComponent\Model\Header;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class HeaderNormalizer
 * @package Accessap\YousignComponent\Serializer\Normalizer
 */
class HeaderNormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        /** @var string $encodedJSON */
        $encodedJSON = json_encode($data, \JSON_THROW_ON_ERROR);

        return new Header(json_decode($encodedJSON, true, 512, \JSON_THROW_ON_ERROR));
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, string $type, string $format = null): bool
    {
        return Header::class === $type;
    }
}
