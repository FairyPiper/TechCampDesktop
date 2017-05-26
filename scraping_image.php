<?php

require_once 'simple_html_dom.php';

function scraping_image($link)
{
    $page = file_get_html($link);
    $image_url = $page->find('.entry-content img')[0]->src;
    return $image_url;
}

$links = array();
// $page = file_get_html('http://review-movie.herokuapp.com/');
$current_page = file_get_html('http://review-movie.herokuapp.com/');
$elements = $current_page->find('.entry-title a');

foreach ($elements as $ele)
{
    $links[] = $ele->href;
}

foreach ($links as $link)
{
    echo scraping_image('http://review-movie.herokuapp.com' . $link), PHP_EOL;
}

?>