<?php

namespace App\Services\Encounter;

use App\Games\Sender;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\FileCookieJar;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Collection;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Класс для работы с Encounter

 * @package App\Services\Encounter
 */
class EncounterService
{
    const CACHE_KEY = 'EncounterService:%s:%s';


    /**
     * @var Client
     */
    private $client;

    /** @var  int */
    private $gameId;

    public function __construct()
    {
        $this->crawler = new Crawler();
        $this->client = new Client();
    }


}
