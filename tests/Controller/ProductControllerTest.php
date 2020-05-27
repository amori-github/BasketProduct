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
        //$this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertSame(1, $crawler->filter('html:contains("product")')->count());

    }



    /** @test3 */
   /* public function testHomepageIsUp()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/product');
        $this->assertEquals(1, $crawler->filter('html:contains("cdfv")')->count());
        $this->assertContains("j product 1",$client->getResponse()->getContent());
    }*/

}

