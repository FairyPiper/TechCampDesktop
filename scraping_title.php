<?php

require_once 'simple_html_dom.php';

$page = file_get_html('http://review-movie.herokuapp.com/');

$elements = $page->find('.entry-title a');
foreach ($elements as $ele)
{
    echo $ele->plaintext, PHP_EOL;
}

?>