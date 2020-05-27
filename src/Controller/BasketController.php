<?php

namespace App\Controller;

use App\Entity\Basket;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BasketController extends AbstractController
{

    private $basket;

    public function __construct(EntityManagerInterface $objectManager)
    {
        $this->basket = new Basket($objectManager);

    }

    /**
     * @Route("/basket", name="basket")
     */
    public function show()
    {
        $products = [];
        $totalPrice = 0;

        if ($this->basket->hasProducts()) {
            $products = $this->basket->getProducts();
            $totalPrice = $this->basket->totalPrice($products);
        }
        $nbarticles = $this->basket->nbarticle();


        return $this->render('basket/index.html.twig', [
            'products' => $products,
            'totalPrice' => $totalPrice,
            "articles" => $nbarticles
        ]);
    }


    /**
     * @Route("/add/{id}", name="basket.add")
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function add($id, Request $request)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if ($product->getId()) {
            $this->basket->add($product);
        }

        if ($request->query->get('qte') != null) {
            $qte = $request->query->get('qte');
            $this->basket->update($product, $qte);
        }


        $this->addFlash('success', 'Le produit est ajouté avec succès !');
        return $this->redirectToRoute('basket', [
            'id' => $product->getId(),
        ]);
    }

    /**
     * @Route("/remove/{id}", name="basket.remove")
     */
    public function remove($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        $this->basket->remove($product);

        return $this->redirectToRoute('basket');
    }

    /**
     * @Route("/clear", name="basket.clear")
     */
    public function clear()
    {
        $this->basket->clear();
        return $this->redirectToRoute('basket');
    }

    /**
     * @Route("/nbarticle", name="basket.nbarticle")
     */
    public function nbarticle()
    {
        $nbarticles = $this->basket->nbarticle();
        return $this->render('basket/nbarticle.html.twig',[
            "articles" => $nbarticles
        ]) ;
    }


}
