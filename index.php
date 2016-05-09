<?php
/**
 * Created by PhpStorm.
 * User: khaled
 * Date: 5/9/16
 * Time: 7:40 PM
 */

require 'vendor/autoload.php';



$content = file_get_contents('./data/page.html');

$n = preg_match_all('/"([^"]+?\.js)"/', $content, $matches);
if ($n !== FALSE && $n > 0) {
    var_dump($matches[1]);
}

echo $content;