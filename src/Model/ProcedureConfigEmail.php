<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Class ProcedureConfigEmail
 * @package Accessap\YousignComponent\Model
 */
class ProcedureConfigEmail
{
    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.started")
     */
    public ?array $procedureStartedEmails = [];

    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.finished")
     */
    public ?array $procedureFinishedEmails = [];

    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.refused")
     */
    public ?array $procedureRefusedEmails = [];

    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.expired")
     */
    public ?array $procedureExpiredEmails = [];

    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("procedure.deleted")
     */
    public ?array $procedureDeletedEmails = [];

    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("member.finished")
     */
    public ?array $memberFinishedEmails = [];

    /**
     * @var Email[]
     * @Groups({"read", "write"})
     * @SerializedName("comment.created")
     */
    public ?array $commentCreatedEmails = [];
}
