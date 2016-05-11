<?php

namespace ResponseCompressorTest;

use ResponseCompressor\Compressor;
use ResponseCompressor\Exception\FileNotExistException;
use ResponseCompressor\File\CssFile;

/**
* Compressor test
*/
class CompressorTest extends \PHPUnit_Framework_TestCase
{

	protected $compressor;
	protected $config;

	public function setUp()
	{
		$html = '<html><head><link href="/css/style.css" /><link href="/css/common.css" /></head><body></body></html>';
		$this->config = ['base_path'=>'/var/www/html/psr7-response-minfied/public'];
		$this->compressor = new Compressor($this->config);
		$this->compressor->loadPage($html);

	}

	public function testExtractCSSFiles()
	{
		$this->compressor->extractCssFiles();
		$cssFile = new CssFile($this->config['base_path'].'/css/styles.css');
		$this->assertEquals(['css'=>[$cssFile]], $this->compressor->getFiles());

        $this->getExpectedException(FileNotExistException::class);
	}

	public function testCannonicalName()
	{
		$this->compressor->extractCssFiles();
		$expected = "stylecommon.css";
		$this->assertEquals($expected, $this->compressor->getCannonicalName("css"));
	}

}