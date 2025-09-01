<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WebController extends AbstractController
{
    #[Route('/web')]
    public function index(): Response
    {
        return $this->render('web/index.html.twig');
    }
}
