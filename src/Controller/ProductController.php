<?php

namespace App\Controller;

use App\Entity\Basket;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;
    private $basket;


    public function __construct(ProductRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;

  }

    /**
     * @Route("/", name="product.index")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request):Response
    {
        $product = $paginator->paginate(
            $this->repository->findAllByNameAscQuery(),
            $request->query->getInt('page', 1),
            4
        );


        return $this->render('product/index.html.twig',[
            "Current_menu" => "products",
            "products" => $product
        ]);

    }

    /**
     * @Route("/product/show/{id}", name="product.show")
     * @param Product $product
     * @return Response
     */
    public function show(Product $product):Response
    {

        return $this->render('product/show.html.twig',[
            "product" => $product,
            "Current_menu" => "products"
        ]);

    }


}
