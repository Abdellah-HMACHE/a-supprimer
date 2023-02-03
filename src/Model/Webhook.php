<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Webhook
 * @package Accessap\YousignComponent\Model
 */
class Webhook
{
    /**
     * @Groups({"read", "write"})
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @Groups({"read", "write"})
     * @var string|null
     */
    public ?string $method= null;

    /**
     * @Groups({"read", "write"})
     * @var Header
     */
    public Header $headers;

}