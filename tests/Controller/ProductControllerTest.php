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
        //tester le nombre de produit affiché dans une page
        $nbItems =  $crawler->evaluate('count(//a[@id="produits"])');
        // 4 produit sont affichés avec la pagination
        $nbItemsPage=[
            0 => 4.0,
        ];
        $this->assertSame($nbItemsPage,  $nbItems );
    }


}
