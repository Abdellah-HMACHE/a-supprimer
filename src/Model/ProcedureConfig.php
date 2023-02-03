<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ProcedureConfig
 * @package Accessap\YousignComponent\Model
 */
class ProcedureConfig
{
    /**
     * @Groups({"read", "write"})
     */
    public ?ProcedureConfigEmail $email = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?ProcedureConfigWebhook $webhook = null;
}
