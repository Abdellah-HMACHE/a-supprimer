<?php

namespace Accessap\YousignComponent\Model;

use Symfony\Component\Serializer\Annotation\Groups;

class FileObject
{
    /**
     * @Groups({"read"})
     */
    public ?string $id = null;

    /**
     * @Groups({"write"})
     */
    public ?string $file = null;

    /**
     * @Groups({"read", "write"})
     */
    public int $page = 0;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $position = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $fieldName = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $mention = null;

    /**
     * @Groups({"read", "write"})
     */
    public ?string $mention2 = null;
}
