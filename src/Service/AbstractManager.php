<?php

namespace Accessap\YousignComponent\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Accessap\YousignComponent\Serializer\Serializer;

/**
 * Class AbstractManager
 * @package Accessap\YousignComponent\Service
 */
class AbstractManager
{
    protected Serializer $serializer;
    private HttpClientInterface $httpClient;
    protected ParameterBagInterface $parameterBag;

    public function __construct(
        ParameterBagInterface $parameterBag,
        Serializer $serializer
    ) {
        $this->parameterBag = $parameterBag;
        $this->serializer = $serializer;
        $this->httpClient = HttpClient::create([
            'headers' => [
                'Authorization' => 'Bearer '.$parameterBag->get('yousign.api_token'),
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * @throws TransportExceptionInterface
     */
    protected function getRequest(string $url, array $params = []): ResponseInterface
    {
        return $this->httpClient->request('GET', $url, [
            'query' => $params,
        ]);
    }

    /**
     * @throws TransportExceptionInterface
     */
    protected function postRequest(string $url, array $args = []): ResponseInterface
    {
        return $this->httpClient->request('POST', $url, [
            'json' => $args,
        ]);
    }

    protected function deleteRequest(string $url)
    {
        return $this->httpClient->request('DELETE', $url);
    }
}
