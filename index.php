<?php
/**
 * Created by PhpStorm.
 * User: khaled
 * Date: 5/9/16
 * Time: 7:40 PM
 */

require 'vendor/autoload.php';



$content = file_get_contents('./data/page.html');

$compressor = new \ResponseCompressor\Compressor();

$compressor->loadPage($content);
$compressor->extractCSSFiles();
$compressor->extractJSFiles();



echo $content;