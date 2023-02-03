<?php

namespace Accessap\YousignComponent\Service\SignatureUi;

use Accessap\YousignComponent\Model\SignatureUi;

interface SignatureUiManagerInterface
{
    public function create(SignatureUi $signatureUi): SignatureUi;
}
