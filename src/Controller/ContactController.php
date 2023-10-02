<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    public function submit(Request $request) { 
        $name = $request->request->get('name'); 
        return new Response('Merci ' . $name . ', votre message a été reçu.'); 
    }
}
