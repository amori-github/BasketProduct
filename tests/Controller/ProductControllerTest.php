<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testProduct()
    {
        $client= static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $tab1 =  $crawler->evaluate('count(//a[@id="produits"])');
        $ar1=[
            0 => 4.0,
        ];
        $this->assertSame($ar1,  $tab1 );
    }
}
