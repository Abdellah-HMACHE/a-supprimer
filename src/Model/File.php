<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

class File
{
    /**
     * @Groups({"read"})
     */
    public ?string $id;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $name = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $type = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $password = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $description = null;

    /**
     * @Groups({"read"})
     */
    public ?array  $metadata = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $content = null;

    /**
     * @Groups({"read"})
     */
    public ?string $contentType = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $procedure = null;

    /**
     * @Groups({"read"})
     */
    public ?string $workspace = null;

    /**
     * @Groups({"read"})
     */
    public ?string $creator = null;

    /**
     * @Groups({"read"})
     * @SerializedName("sha256")
     */
    public ?string $hash = null;

    /**
     * @Groups({"read", "write"})
     * @SerializedName("position")
     */
    public ?int $order;
}
