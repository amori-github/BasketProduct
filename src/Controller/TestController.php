<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{


    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(ProductRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/test", name="test")
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

        return $this->render('test/index.html.twig',[
            "Current_menu" => "products",
            "products" => $product,
        ]);

    }
}
