<?php

namespace Accessap\YousignComponent\Service\SignatureUi;

use Accessap\YousignComponent\Model\SignatureUi;
use Accessap\YousignComponent\Service\AbstractManager;

/**
 * Class SignatureUiManager
 * @package Accessap\YousignComponent\Service\SignatureUi
 */
class SignatureUiManager extends AbstractManager implements SignatureUiManagerInterface
{
    
    public function create(SignatureUi $signatureUi): SignatureUi
    {
        $data = $this->serializer->normalize($signatureUi);

        $response = $this->postRequest($this->parameterBag->get('yousign.endpoint.signature_uis'), $data)->getContent();

        return $this->serializer->deserialize($response, SignatureUi::class);
    }
}
