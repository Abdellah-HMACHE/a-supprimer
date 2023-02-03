<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;

class Member
{
    /**
     * @Groups({"read"})
     */
    public ?string $id = null;

    /**
     * @Groups({"read"})
     */
    public ?string $user = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $type = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $firstname = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $lastname = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $email = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $phone = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?int $position = null;

    /**
     * @Groups({"read"})
     */
    public ?string $status = null;

    /**
     * @Groups({"read", "write"})
     */
    public array $fileObjects = [];

    /**
     * @Groups({"read"})
     */
    public ?string $comment = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $procedure = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $operationLevel = null;

    /**
     * @Groups({"read", "write"})
     */
    public array $operationCustomModes = [];
}
