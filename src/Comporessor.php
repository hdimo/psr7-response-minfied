<?php
namespace ResponseCompressor;

/**
* Compressor class
*/
class Compressor
{

	$files = [];
	
	function __construct()
	{
		
	}

	public function minify(){
		$buffer = "";
		foreach ($this->files as $fileToCompress) {
			$buffer .= file_get_contents($fileToCompress);
		}
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
		$buffer = str_replace(': ', ':', $buffer);
		$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
		echo($buffer);
	}
}