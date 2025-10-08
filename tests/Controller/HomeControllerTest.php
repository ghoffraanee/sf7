<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testHomepage(): void
    {
        // Crée un client HTTP pour simuler le navigateur
        $client = static::createClient();

        // Fait une requête GET vers la page d'accueil
        $client->request('GET', '/');

        // Vérifie que la page s'affiche correctement (code 200)
        $this->assertResponseIsSuccessful();

        // Vérifie que le <h1> contient bien "Welcome"
        $this->assertSelectorTextContains('h1', 'Welcome');
    }
}
