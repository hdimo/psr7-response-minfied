<?php

namespace ResponseCompressorTest;

use ResponseCompressor\Compressor;

/**
* Compressor test
*/
class CompressorTest extends \PHPUnit_Framework_TestCase
{

	public function testCreateCompressorClass(){
		$compr = new Compressor();
	}

	public function testMinifyFile(){
		$compr = new Compressor();
		$compr->minify();
	}
	

}