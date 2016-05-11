<?php
/**
 * Created by PhpStorm.
 * User: khaled
 * Date: 5/9/16
 * Time: 7:40 PM
 */

require '../vendor/autoload.php';



throw new \ResponseCompressor\Exception\FileNotExistException("file.css");

/*

$content = file_get_contents('../data/page.html');

$config = [
    'base_path'=>__DIR__,
];


$html = '<html><head><link href="/css/style.css" /></head><body></body></html>';
$config = ['base_path'=>'/var/www/html/psr7-response-minfied/public'];

$compressor = new \ResponseCompressor\Compressor($config);
$compressor->loadPage($content);
$compressor->extractCSSFiles();

$fname = $compressor->getCannonicalName('css');
file_put_contents(__DIR__.DIRECTORY_SEPARATOR.$fname, $compressor->getFinalFileContent('css'));

var_dump($compressor->getFiles());
/*
$compressor = new \ResponseCompressor\Compressor($config);

$compressor->loadPage($content);
$compressor->extractCSSFiles();
//$compressor->extractJSFiles();

var_dump($compressor->getFiles());

echo $content;
*/