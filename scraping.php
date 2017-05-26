<?php

require_once 'simple_html_dom.php';

// $page = file_get_html('https://app-mooovi.herokuapp.com/works/initial_scraping');

// $page = file_get_html('https://app-mooovi.herokuapp.com/works/first_scraping');

// $page = file_get_html('https://app-mooovi.herokuapp.com/works/second_scraping');

$page = file_get_html('https://app-mooovi.herokuapp.com/works/third_scraping');

// $elements = $page->find('p');
// $elements = $page->find('li');
// $elements = $page->find('div div');
$elements = $page->find('.etc div');
foreach ($elements as $ele)
{
    echo $ele->plaintext, PHP_EOL;
}
?>