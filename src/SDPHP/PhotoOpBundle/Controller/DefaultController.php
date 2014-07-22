<?php

namespace SDPHP\PhotoOpBundle\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
//
    public function testAction()
    {
        // Guzzle 4 client
        $client = new Client();
        // Make a GET request to API, This will eventually be in a service description
        $guzzleResponse = $client->get('http://google.com');
        // Get the content of the response body (xml)
        $symfonyResponse = new Response($guzzleResponse->getBody());
        // set the content type of the response to display the xml in the web browser
        $symfonyResponse->headers->set('content-type', 'text/xml');

//        return $symfonyResponse;

        return $this->render(
            'PhotoOpBundle:Default:index.html.twig',
            [
                'name' => 'Juan',
                'google_body' => $guzzleResponse->getBody()
            ]
        );
    }
}
