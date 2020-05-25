<?php

namespace App\Tests\Entity;

use App\Entity\Basket;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasketTest extends TestCase
{


    /**
     * @runInSeparateProcess
     */
    public function testTotalPrice()
    {
        $basket = new Basket();
        $products = [];

        $product = new Product();
        $product->setPrix(10.45);
        $product->setQuantity(3);
        $products[] = $product;

        $product1 = new Product();
        $product1->setPrix(100.55);
        $product1->setQuantity(2);
        $products[] = $product1;

        $this->assertEquals(232.45, $basket->totalPrice($products));
    }
    /**
     * @runInSeparateProcess
     */
    public function testAddProductToBasket()
    {
        $basket = new Basket();
        $product = new Product();
        $product->setId(1);
        $basket->add($product);
        $id = $product->getId();
        $this->assertEquals(true, $basket->hasProduct($id));
    }

    /**
     * @runInSeparateProcess
     */
    public function testAddTwoProductToBasket()
    {
        $basket = new Basket();
        $product = new Product();
        $product->setId(1);
        $basket->add($product);
        $basket->add($product);
        $this->assertEquals(2, $basket->getQuantity($product));
    }
    /**
     * @runInSeparateProcess
     */
    public function testUpdateProduct()
    {
        $basket = new Basket();

        $product = new Product();
        $product->setId(1);

        $basket->add($product);

        $quantity = 6;
        $basket->update($product, $quantity);

        $this->assertEquals(6, $basket->getQuantity($product));
    }

    /**
     * @runInSeparateProcess
     */
    public function testRemoveProduct()
    {
        $basket = new Basket();

        $product = new Product();
        $product->setId(1);

        $basket->add($product);
        $basket->remove($product);

        $id = $product->getId();
        $this->assertEquals(false, $basket->hasProduct($id));
    }

    /**
     * @runInSeparateProcess
     */
    public function testCountProductQuantity()
    {
        $basket = new Basket();

        $product = new Product();
        $product->setId(1);

        $product1 = new Product();
        $product1->setId(2);

        $basket->add($product);
        $basket->add($product);
        $basket->add($product1);


        $this->assertEquals(3, $basket->count());
    }
    /**
     * @runInSeparateProcess
     */
    public function testnbarticle()
    {
        $basket = new Basket();

        $product = new Product();
        $product->setId(1);

        $product1 = new Product();
        $product1->setId(2);

        $product2 = new Product();
        $product2->setId(3);

        $basket->add($product);
        $basket->add($product);
        $basket->add($product1);
        $basket->add($product2);


        $this->assertEquals(3, $basket->nbarticle());
    }


    /**
     * @runInSeparateProcess
     */
    public function testHasProducts()
    {
        $basket = new Basket();
        $product = new Product();
        $product->setId(1);
        $basket->add($product);

        $this->assertEquals(true, $basket->hasProducts());

        $basket->clear();
        $this->assertEquals(false, $basket->hasProducts());
    }

}
