<?php
namespace App\Controller;

use App\Entity\Ocurrence;
use App\Service\RequestService;
use App\Service\StoreService;
use App\Utils\Challenge;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    protected  $requestService;
    protected  $challenge;

    public function __construct(RequestService $requestService, Challenge $challenge)
    {
        $this->requestService = $requestService;
        $this->challenge = $challenge;
    }
}