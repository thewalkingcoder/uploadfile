<?php

namespace App\Controller;

use App\Form\AddFilesType;
use App\Message\AddFilesCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(Request $request): Response
    {
        $command = new AddFilesCommand();
        $form = $this->createForm(AddFilesType::class, $command);

        if ($form->handleRequest($request)->isSubmitted() && $form->isValid()) {
            dump($command);
        }
        return $this->render('app/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
