<?php
/**
 * User: khaled
 * Date: 5/9/16
 */
namespace ResponseCompressorTest\FileTest;

use ResponseCompressor\File\CssFile;

class CssFileTest extends \PHPUnit_Framework_TestCase
{

    protected $cssFile;

    public function setUp()
    {
        $path =  '/var/www/html/psr7-response-minfied/public/css/style.css';
        $this->cssFile = new CssFile($path);
    }

    public function testLoadInfo()
    {
        $content = 'body {color:#737373;font-family:\'Open Sans\', Tahoma, Arial, helvetica, sans-serif;font-size:14px;line-height:1.6em;font-weight:400;}a {color:#ed8323;text-decoration:none;}a:hover {color:#c96810;text-decoration:none;}h1,h2,h3,h4,h5,.text-hero {font-family:\'Roboto\', arial, helvetica, sans-serif;margin-top:0;font-weight:300;color:#565656;line-height:1.3em;}h1.bolded,h2.bolded,h3.bolded,h4.bolded,h5.bolded,.text-hero.bolded {font-weight:400;}h1 b,h2 b,h3 b,h4 b,h5 b,.text-hero b {font-weight:300;line-height:1em;}h1 small,h2 small,h3 small,h4 small,h5 small,.text-hero small {font-size:50%;font-weight:inherit;}h1 {font-size:51.98102000000001px;}h2 {font-size:39.985400000000006px;}h3 {font-size:30.758000000000003px;}h4 {font-size:23.66px;}h5 {font-size:18.2px;font-weight:300;}* > small,small {color:#818181;font-size:10px;line-height:1.4000000000000001em;}big,.text-lg {color:#686868;font-size:16px;line-height:1.78em;}.page-title {font-size:75px;margin:30px 0;}@media (max-width:992px) {.page-title {font-size:50px;}}';
        $this->assertEquals('style.css', $this->cssFile->getName());
        $this->assertEquals('css', $this->cssFile->getType());
        $this->assertEquals($content, $this->cssFile->getContent());
    }



}