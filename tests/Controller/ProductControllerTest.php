<?php

namespace App\Tests\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{


    /** @test */
   public function Index()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/product');
        $this->assertSame(500, $client->getResponse()->getStatusCode());

    }



    /** @test3 */
    public function testHomepageIsUp()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/product');

        $this->assertSame(1, $crawler->filter('html:contains("a.produits")')->count());
    }

}

