<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Dto\Event;
use App\Form\Dto\Ticket;
use App\Form\Type\EventType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class EventController
 * 
 * @package App\Controller
 */
class EventController extends BaseController
{
    // unter macOS vermutlich -> 'host.docker.internal'
    const DOCKER_HOST = '172.17.0.1';

    /**
     * @Route("/", name="index_event")
     */
    public function index(): Response
    {
        $response = $this->client->request(
            'GET',
            sprintf('http://%s:5000/events', self::DOCKER_HOST)
        );

        $content = $response->toArray();
        return $this->render('events/index.html.twig', ['events' => $content]);
    }

    /**
     * @Route("/create", name="create_event")
     */
    public function create(Request $request): Response
    {
        $event = new Event();
        $ticket = new Ticket();

        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();

            $response = $this->client->request(
                'POST',
                sprintf('http://%s:5000/events', self::DOCKER_HOST),
                [
                    'body' => $event->toArray(),
                ]
            );

            return $this->redirectToRoute('index_event');
        }

        return $this->renderForm('events/create.html.twig', ['form' => $form]);
    }
}