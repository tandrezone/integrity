<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ChallengeController extends BaseController
{

    /**
     * @Route("/", methods="GET", name="index")
     * @return Response
     */
    public function index() : Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/notas", methods="GET", name="notas")
     * @return Response
     */
    public function help() : Response
    {
        return $this->render('notas.html.twig');
    }
    /**
     * @Route("/logs", methods="GET", name="logs")
     * @return Response
     */
    public function showLogs() : Response
    {
        $requests = $this->requestService->getRequestLogs();

        return $this->render('logs.html.twig', [
            'requests' => $requests,
            'joke'  => $this->challenge->getChuckJoke()
        ]);
    }

    /**
     * @Route("/top20", methods="POST", name="top20")
     */
    public function getTop20(Request $request) : Response
    {
        $requestId = $request->request->get("requestId");
        if (!filter_var($requestId, FILTER_VALIDATE_INT)) {
            return $this->json(['error' => 'value not valid']);
        }

        $occurrences = $this->requestService->getOcurrenceLogs($requestId);
        return $this->json(['data' => $occurrences]);
    }

    /**
     * @Route("/joke", methods="GET", name="joke")
     */
    public function getJoke()  : Response
    {
        return $this->json(['data' => $this->challenge->getChuckJoke()]);
    }

    /**
     * @Route("/check", methods={"POST", "GET"}, name="check")
     */
    public function analizeResponse(Request $request) {
        $url = $request->request->get("url");

        if (!isset($url)) {
            return $this->render('check.html.twig',["chars" => ""]);
        }
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $this->addFlash("danger","Invalid URL");
            return $this->render('check.html.twig',["chars" => ""]);
        }

        try {
            $response = $this->requestService->getDataFromUrl($url);
        } catch (ClientExceptionInterface | RedirectionExceptionInterface | ServerExceptionInterface | TransportExceptionInterface $e) {
            $this->addFlash("danger","ERROR CONNECTING TO URL");
            return $this->render('check.html.twig',["chars" => ""]);
        }

        $contentWithoutLetters = $this->challenge->transform($response['content']);
        $CharsAndOccurrences = $this->challenge->getTopCharsAndOccurrences($contentWithoutLetters);
        //save
        $this->requestService->save($url, $response['info']['url'], $CharsAndOccurrences);
        $response = $this->challenge->formatToView($CharsAndOccurrences, 20);

        return $this->render('check.html.twig',['chars' => $response]);
    }
}
