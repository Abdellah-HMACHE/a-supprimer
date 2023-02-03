<?php

namespace Accessap\YousignComponent\Model;

/**
 * Class Redirect
 * @package Accessap\YousignComponent\Model
 */
class Redirect
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public ?string $target = null;

    /**
     * @var bool
     */
    public bool $auto = false;
}
