<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1 ; $i <= 12; $i++) {
            $alphabet="abcdefghijklmnopqrstuvwxyz";
            $lettre_aleatoire=$alphabet[rand(0,25)];
            $product = new Product();
            $product->setNom($lettre_aleatoire.' product '.$i);
            $product->setImage(' product '.$i.'jpg');
            $product->setUpdatedAt(new \DateTime('02/06/2020'));
            $product->setDescription('Description du Produit '.$i);
            $product->setPrix(mt_rand(10, 100));
            $manager->persist($product);
        }


        $manager->flush();
    }
}
