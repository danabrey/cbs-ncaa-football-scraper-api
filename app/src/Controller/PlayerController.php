<?php

namespace App\Controller;

use App\Service\CollegePlayerStatsScraper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PlayerController
 * @package App\Controller
 */
class PlayerController extends AbstractController
{
    /**
     * @Route("/player/{id}")
     * @param CollegePlayerStatsScraper $scraper
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function test(int $id, CollegePlayerStatsScraper $scraper)
    {
        $stats = $scraper->getPlayerStats($id);
        return $this->json($stats);
    }
}