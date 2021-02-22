<?php
namespace App\Utils;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

//Bussiness logic https://symfony.com/doc/4.2/best_practices/business-logic.html
class Challenge {

    /**
     * Fetch a joke from Chuck Norris Website
     * @return string
     */
    public final function getChuckJoke() : string {
        try{
            $client = HttpClient::create();
            $response = $client->request('GET', 'https://api.chucknorris.io/jokes/random');
            $response = $response->toArray();
        } catch (ClientExceptionInterface | RedirectionExceptionInterface | DecodingExceptionInterface| ServerExceptionInterface | TransportExceptionInterface $e) {
            return "Chuck Norris don't have Exceptions he is an Exception";
        }
        return $response['value'];
    }

    /**
     * Removes all letters and spaces from a string
     * @param string $content
     * @return string
     */
    public final function transform(string $content) : string
    {
        $content = htmlspecialchars_decode($content);
        return preg_replace('/(\p{L}|\p{Z})|\p{C}/', '', $content);
    }

    /**
     * Transform a string into an array of chars and occurrences
     * @param string $content
     * @return array
     */
    public final function getTopCharsAndOccurrences(string $content) : array
    {
        $collArray = str_split($content);
        $top = [];
        foreach ($collArray as $char) {
            if (!isset($top[$char])) {
                $top[$char] = 0;
            }
            $top[$char]++;
        }
        arsort($top);
        return $top;
    }

    /**
     * Get the Top Chars and format them to be displayed on a table
     * @param array $values
     * @param int $limit
     * @return array
     */
    public final function formatToView(array $values,int $limit = 20) : array {
        $top =array_slice($values,0,$limit,true);
        $tableRow = [];
        foreach ($top as $key=>$value) {
            $tableRow[] = [$key, $value];
        }
        return $tableRow;
    }
}
