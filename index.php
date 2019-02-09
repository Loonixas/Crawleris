 <?php

 require 'vendor/autoload.php';

 use Symfony\Component\DomCrawler\Crawler;

 use Symfony\Component\CssSelector\CssSelectorConverter;

 // url

 $url = 'https://www.imdb.com/chart/top?ref_=nv_mv_250';

 $client = new GuzzleHttp\Client;

 // go get the data from url

 $response = $client->request('GET', $url);
 $html = ''.$response->getBody();

 $crawler = new Crawler($html);

 // loop through the data
 // search for values that I want

 $nodeValues = $crawler->filter('.lister-list > div')->each(function (Crawler $node, $i) {
     echo $node->html();
 });

 // echo back out to the screen


