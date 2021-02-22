<?php

namespace App\Command;

use App\Service\RequestService;
use App\Service\StoreService;
use App\Utils\Challenge;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Component\Console\Helper\Table;

class CheckCommand extends Command
{

    protected static $defaultName = 'url:check';
    protected  $requestService;
    protected  $challenge;

    public function __construct(RequestService $requestService, Challenge $challenge)
    {
        $this->requestService = $requestService;
        $this->challenge = $challenge;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Gets the top20 non letters ')
            ->addArgument("url", InputArgument::REQUIRED, "The url to fetch")
            ->setHelp('Given an url this command fetch the response from the url and show the top20 non letters');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $url = $input->getArgument('url');

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $output->writeln('<error>Invalid URL</error>');
            return Command::FAILURE;
        }

        try {
            $response = $this->requestService->getDataFromUrl($url);
        } catch (ClientExceptionInterface | RedirectionExceptionInterface | ServerExceptionInterface | TransportExceptionInterface $e) {
            $output->writeln('<error>ERROR CONNECTING TO URL</error>');
            return Command::FAILURE;
        }

        //remove the letters from the response
        $contentWithoutLetters = $this->challenge->transform($response['content']);
        //get array from list of chars and occurrences
        $CharsAndOccurrences = $this->challenge->getTopCharsAndOccurrences($contentWithoutLetters);
        //save to the db
        $this->requestService->save($url ,$response['info']['url'], $CharsAndOccurrences);

        //limit by 20 and format to view
        $tableRow = $this->challenge->formatToView($CharsAndOccurrences);
        //view
        $table = new Table($output);
        $table
            ->setHeaders(['Chars', 'Number of Times'])
            ->setRows(
                $tableRow
            );
        $table->render();

        return Command::SUCCESS;
    }
}
