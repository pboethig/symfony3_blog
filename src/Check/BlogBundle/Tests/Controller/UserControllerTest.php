<?php

namespace Check\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    /*
    public function testCompleteScenario()
    {
        $client = $this->client;
        $this->logIn();


        // Create a new entry in the database
        $crawler = $client->request('GET', '/admin/user/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'check_blogbundle_user[field_name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertTrue($crawler->filter('td:contains("Test")')->count() > 0);

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'check_blogbundle_user[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertTrue($crawler->filter('[value="Foo"]')->count() > 0);

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    */

    public function testRouteIsAvaliable()
    {
        $client = static::createClient();

        $crawler = $client->request('GET' ,'/user/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }


    public function testFilterLinkIsAvailable()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/');

        $crawler = $client->click($crawler->selectLink('Filter')->link());
    }
}