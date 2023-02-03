<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Procedure
{
    /**
     * @Groups({"read"})
     */
    public ?string $id = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $name = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?\DateTimeInterface $expiresAt = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?\DateTimeInterface $finishedAt = null;

    /**
     * @Groups({"read"})
     */
    public ?string $status = 'active';

    /**
     * @Groups({"read"})
     */
    public ?string $creator = null;

    /**
     * @Groups({"read"})
     * @SerializedName("creatorFirstName")
     */
    public ?string $creatorFirstname = null;

    /**
     * @Groups({"read"})
     * @SerializedName("creatorLastName")
     */
    public ?string $creatorLastname = null;

    /**
     * @Groups({"read"})
     */
    public ?string $workspace = null;

    /**
     * @Groups({"read"})
     */
    public ?string $parent = null;

    /**
     * @Groups({"read", "write"})
     */
    public bool $template = false;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $description = null;

    /**
     * @Groups({"read", "write"})
     */
    public bool $ordered = false;

    /**
     * @Groups({"read", "write"})
     */
    public bool $relatedFilesEnable = false;

    /**
     * @Groups({"read", "write"})
     */
    public bool $archive = false;

    /**
     * @Groups({"read", "write"})
     */
    public array $members = [];

    /**
     * @Groups({"read", "write"})
     */
    public array $metadatas = [];

    /**
     * @Groups({"read", "write"})
     */
    public ?ProcedureConfig $config = null;

    /**
     * @Groups({"read"})
     */
    public array $files = [];
}
