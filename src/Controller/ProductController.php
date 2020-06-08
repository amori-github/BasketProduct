<?php

namespace App\Controller;


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
     *
     * @Route("/product/{slug}-{id}", name="product.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Product $product
     * @return Response
     */
    public function show(Product $product):Response
    {
             return $this->render('product/show.html.twig',[
                 "product" => $product

             ]);
    }

    /**
     * @Route("/product/exportjson", name="product.export.json", methods={"get"})
     * @return Response
     */
    public function exportjson():Response
    {

        $content = $this->json($this->repository->findAll(),200,[],['groups'=>'product:read']);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/json');
        $response->headers->set('Content-Disposition', 'attachment; filename="produits.json"');
        return $response;

    }

    /**
     * @Route("/product/exportcsv", name="product.export.csv", methods={"get"})
     *
     */
    public function ExportCsv()
    {

       // $data = $this->json($this->repository->findAll(),200,[],['groups'=>'product:read']);
        $events  = $this->repository->findAll();
        foreach ($events as $event) {
            $data = array($event->getId(), $event->getNom(), $event->getDescription(), $event->getPrix());
            $rows[] = implode(';', $data);
        }
        $handle = fopen('php://output', 'w+');
        // Add the header of the CSV file
        fputcsv($handle, array('Id', 'Nom', 'Description', 'Prix'),';');
        $handle = implode("\n", $rows);
        $response = new Response($handle);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="produits.csv"');

        return $response;

    }








}
