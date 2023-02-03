<?php

namespace Accessap\YousignComponent\Service\Procedure;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Accessap\YousignComponent\Model\Procedure;
use Accessap\YousignComponent\Service\AbstractManager;

class ProcedureManager extends AbstractManager implements ProcedureManagerInterface
{
    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function create(Procedure $procedure): Procedure
    {
        $data = $this->serializer->normalize($procedure, ['groups' => ['read', 'write']]);

        $response = $this->postRequest($this->parameterBag->get('yousign.endpoint.procedures'), $data)->getContent();

        return $this->serializer->deserialize($response, Procedure::class, ['groups' => ['read']]);
    }

    /**
     * @param $procedureId
     * @return mixed
     */
    public function delete($procedureId)
    {
        return $this->deleteRequest($this->parameterBag->get('yousign.endpoint.procedures') . '/' . $procedureId);
    }

}
