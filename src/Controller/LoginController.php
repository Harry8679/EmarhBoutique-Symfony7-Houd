<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/connexion', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // Manage errors
        $error = $authenticationUtils->getLastAuthenticationError();

        // Last username (email)
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('login/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername
        ]);
    }
}
