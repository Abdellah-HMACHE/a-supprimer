<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Header
 * @package Accessap\YousignComponent\Model
 */
class Header
{
    /**
     * @Groups({"read", "write"})
     * @var array|null 
     */
    public ?array $parameters = null;
}