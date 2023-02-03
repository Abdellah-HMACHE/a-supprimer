<?php

namespace Accessap\YousignComponent\Service\File;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Accessap\YousignComponent\Model\File;
use Accessap\YousignComponent\Service\AbstractManager;

class FileManager extends AbstractManager implements FileManagerInterface
{
    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function create(File $file): File
    {
        $data = $this->serializer->normalize($file, ['groups' => ['write']]);

        $response = $this->postRequest($this->parameterBag->get('yousign.endpoint.files'), $data)->getContent();

        return $this->serializer->deserialize($response, File::class, ['groups' => ['read']]);
    }

    public function download(string $fileId): string
    {
        return $this->getRequest(
            $this->parameterBag->get('yousign.endpoint.files').'/'.$fileId.'/download'
        )->getContent();
    }
}
