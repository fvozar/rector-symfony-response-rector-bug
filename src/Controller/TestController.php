<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{

	public function someAction(): JsonResponse
	{
		return JsonResponse::create(['data' => '...'], Response::HTTP_OK);
	}
}
