<?php


namespace Accessap\YousignComponent\Event;

use Symfony\Contracts\EventDispatcher\Event;

class AbstractEvent extends Event
{
    private array $headers;
    private array $content;

    public function __construct(array $headers, array $content)
    {
        $this->headers = $headers;
        $this->content = $content;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getContent(): array
    {
        return $this->content;
    }
}
