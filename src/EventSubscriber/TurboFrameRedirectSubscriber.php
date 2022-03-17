<?php
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class TurboFrameRedirectSubscriber implements EventSubscriberInterface
{

     public function onKernelResponse (ResponseEvent $event)
     {
          if (!$this->shouldWrapRedirect($event->getRequest(), $event->getResponse())){
               return;
          }

          $response = new Response(null, 200, [
               'Turbo-Location' => $event->getResponse()->headers->get('Location'),
          ]);

          $event->setResponse($response);
     }

     public static function getSubscribedEvents()
     {
          return [
               ResponseEvent::class => 'onKernelResponse',
          ];
     }

     private function shouldWrapRedirect(Request $request, Response $response): bool
     {
          if (!$response->isRedirection()){
               return false;
          }
          return (bool) $request->headers->get('Turbo-Frame-Redirect');
     }
}