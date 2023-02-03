<?php

namespace Accessap\YousignComponent\Service\File;

use Accessap\YousignComponent\Model\File;

interface FileManagerInterface
{
    public function create(File $file): File;

    public function download(string $fileId): string ;
}
