<?php

namespace App\Tests\E2E;

use Symfony\Component\Panther\PantherTestCase;

class HomepageTest extends PantherTestCase
{
    public function testHomepageLoads(): void
    {
        $client = static::createPantherClient();
        $client->request('GET', '/');

        // Vérifie le titre de la page
        $this->assertPageTitleContains('Welcome to Symfony');

        // Vérifie le texte du <h1>
        $this->assertSelectorTextContains('h1', 'Welcome');
    }
}
