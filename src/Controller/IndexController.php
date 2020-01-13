<?php

namespace App\Controller;

use App\Entity\JsonData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $jd = new JsonData();
        $jd->setData(["abc" => rand(1,100)]);
        $this->entityManager->persist($jd);
        $this->entityManager->flush();

        return $this->json(
            [
                'message' => 'Welcome to your new controller!',
                'path' => 'src/Controller/IndexController.php',
                'entries' => array_map(
                    function (JsonData $jd) {
                        return $jd->getData();
                    },
                    $this->entityManager->getRepository('App\Entity\JsonData')->findAll()
                ),
            ]
        );
    }
}
