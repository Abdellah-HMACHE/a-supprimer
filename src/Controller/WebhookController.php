<?php

namespace Accessap\YousignComponent\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Accessap\YousignComponent\Event\FinishedEvent;

class WebhookController extends AbstractController
{
    protected EventDispatcherInterface $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function signFinished(Request $request): JsonResponse
    {
        try {
            $headers = $request->headers->all();
            $body = $request->toArray();
            $event = new FinishedEvent($headers, $body);
            $this->eventDispatcher->dispatch($event, FinishedEvent::MEMBER_FINISHED);

            return new JsonResponse([
                'success' => true
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false
            ]);
        }
    }
}
