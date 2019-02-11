<?php

namespace App\Controller;

use App\Service\CollegePlayerStatsScraper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class PlayerController
 * @package App\Controller
 */
class PlayerController extends AbstractController
{
    /**
     * @Route("/player/{id}")
     * @param int $id
     * @param CollegePlayerStatsScraper $scraper
     * @param SerializerInterface $serializer
     * @param AdapterInterface $cache
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function test(int $id, CollegePlayerStatsScraper $scraper, SerializerInterface $serializer, AdapterInterface $cache): JsonResponse
    {
        $cachedItem = $cache->getItem((string)$id);

        if (!$cachedItem->isHit()) {
            $stats = $scraper->getPlayerStats($id);
            $cachedItem->set($serializer->serialize($stats, 'json'));
            $cache->save($cachedItem);
        }

        $json = $cachedItem->get();
        return new JsonResponse($json, 200, [], true);
    }
}