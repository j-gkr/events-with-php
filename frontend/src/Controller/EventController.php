<?php

namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Dto\Event;
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
    const DOCKER_HOST = 'host.docker.internal';
    const TIMEOUT = 2.5;

    /**
     * @Route("/", name="index_event")
     */
    public function index(): Response
    {
        try {
            $response = $this->client->request(
                'GET',
                sprintf('http://%s:5000/events', self::DOCKER_HOST),
                [
                    'timeout' => self::TIMEOUT
                ]
            );

            $content = $response->toArray();

            return $this->render('events/index.html.twig', ['events' => $content]);
        } catch (Exception $e) {
            return $this->render('events/index.html.twig', ['error' => $e->getMessage()]);
        }

    }

    /**
     * @Route("/create", name="create_event")
     */
    public function create(Request $request): Response
    {
        $event = new Event();

        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();

            try {
                $this->client->request(
                    'POST',
                    sprintf('http://%s:5000/events', self::DOCKER_HOST),
                    [
                        'body' => $event->toArray(),
                        'timeout' => self::TIMEOUT
                    ]
                );

                return $this->redirectToRoute('index_event');
            } catch (Exception $e) {
                return $this->redirectToRoute('index_event', ['error' => $e->getMessage()]);
            }
        }

        return $this->renderForm('events/create.html.twig', ['form' => $form]);
    }
}