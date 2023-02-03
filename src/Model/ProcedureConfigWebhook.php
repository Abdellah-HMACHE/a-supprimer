<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class ProcedureConfigWebhook
 * @package Accessap\YousignComponent\Model
 */
class ProcedureConfigWebhook
{
    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.started")
     */
    public ?array $procedureStartedWebhooks = [];

    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.finished")
     */
    public ?array $procedureFinishedWebhooks = [];

    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.refused")
     */
    public ?array $procedureRefusedWebhooks = [];

    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.expired")
     */
    public ?array $procedureExpiredWebhooks = [];

    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.deleted")
     */
    public ?array $procedureDeletedWebhooks = [];

    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("member.finished")
     */
    public ?array $memberFinishedWebhooks = [];

    /**
     * @var Webhook[]
     * @Groups({"read", "write"})
     * @SerializedName("comment.created")
     */
    public ?array $commentCreatedWebhooks = [];
}
