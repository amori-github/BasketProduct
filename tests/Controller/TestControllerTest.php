<?php

namespace App\Tests\Test;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class TestControllerTest extends WebTestCase
{

    /**
     * @runInSeparateProcess
     */
    public function testSomething()
    {

        $client= static::createClient();
        $crawler = $client->request('GET', '/test');
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $tab =  $crawler->evaluate('count(//span[@class="article"])');


        $ar=[
            0 => 4.0,
        ];
        $this->assertSame($ar,  $tab );


    }
}
