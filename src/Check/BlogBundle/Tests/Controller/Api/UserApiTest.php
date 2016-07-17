<?php

namespace Check\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserApiTest extends WebTestCase
{

    public function testRouteIsAvaliable()
    {
        $client = static::createClient();

        $crawler = $client->request('POST' ,'/api/user');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }

}