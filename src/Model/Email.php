<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Email
 * @package Accessap\YousignComponent\Model
 */
class Email
{

    /**
     * @Groups("read", "write")
     */
    public ?array $to = [];

    /**
     * @Groups("read", "write")
     */
    public ?string $subject = null;

    /**
     * @Groups("read", "write")
     */
    public ?string $message = null;

    /**
     * @Groups("read", "write")
     */
    public ?string $fromName = null;
}