<?php
namespace App\Service;

use App\Entity\Ocurrence;
use App\Entity\Request;
use App\Repository\OcurrenceRepository;
use App\Repository\RequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RequestService
{
    /**
     * @var HttpClientInterface
     */
    private  $client;
    private  $requestRepo;
    private  $ocurrenceRepo;
    private  $em;

    /**
     * RequestService constructor.
     * @param HttpClientInterface $client
     * @param RequestRepository $requestRepo
     * @param OcurrenceRepository $ocurrenceRepo
     */
    public function __construct(HttpClientInterface $client, RequestRepository $requestRepo, OcurrenceRepository $ocurrenceRepo, EntityManagerInterface $em) {
        $this->client = $client;
        $this->requestRepo = $requestRepo;
        $this->ocurrenceRepo = $ocurrenceRepo;
        $this->em = $em;
    }

    /**
     * @param string $url
     * @return array
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public final function getDataFromUrl(string $url) : array
    {
        $response = $this->client->request(
            'GET',
            $url
        );
        $content = $response->getContent();
        $info = $response->getInfo();
        $httpLogs = $response->getInfo();

        return [
            "info" => $httpLogs,
            "content" => $content
        ];
    }

    public function getRequestLogs()
    {
        return $this->requestRepo->findAll();
    }

    /**
     * @param int $requestId
     * @return \App\Entity\Ocurrence|null
     */
    public function getOcurrenceLogs(int $requestId, int $limit = 20)
    {
        return $this->ocurrenceRepo->findBy(["request_id" => $requestId], null, $limit);
    }

    public function save(string $request_url ,string $real_url, array $ocurrencesData)
    {
        $request = new Request();
        $request->setRequestUrl($request_url);
        $request->setRedirectUrl($real_url);
        $this->em->persist($request);

        foreach ($ocurrencesData as $char => $occurrences) {
            $occurrence = new Ocurrence();
            $occurrence->setRequest($request);
            $occurrence->setChar($char);
            $occurrence->setOcurrences($occurrences);
            $this->em->persist($occurrence);
        }
        $this->em->flush();
    }


}
