<?php

namespace App\Tests\Test;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class TestControllerTest extends WebTestCase
{
    public function testSomething()
    {


       //$crawler = new Crawler();
        $client= static::createClient();
        $crawler = $client->request('GET', '/test');
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $tab =  $crawler->evaluate('count(//span[@class="article"])');

        /*var_dump($tab );
        die();*/
        $ar=[
            0 => 4.0,
        ];
        $this->assertSame($ar,  $tab );
    }
}
