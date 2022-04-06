<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class BaseController
 * 
 * @package App\Controller
 */
abstract class BaseController extends AbstractController
{
    protected $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
}