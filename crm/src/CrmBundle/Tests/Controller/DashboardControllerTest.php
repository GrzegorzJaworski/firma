<?php

namespace CrmBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    public function testHallo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hallo');
    }

}
