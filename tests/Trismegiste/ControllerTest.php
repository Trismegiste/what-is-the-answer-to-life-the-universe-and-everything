<?php

/*
 * photobook
 */

namespace Tests\Trismegiste;

use Silex\WebTestCase;

/**
 * ControllerTest tests the controller
 */
class ControllerTest extends WebTestCase
{

    public function testHomeContent()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertRegExp('#42#', $client->getResponse()->getContent());
    }

    public function createApplication()
    {
        return new \Trismegiste\AppKernel(['debug' => true, 'webdir' => dirname(__DIR__)]);
    }

}