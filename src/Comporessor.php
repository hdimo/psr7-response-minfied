<?php
namespace ResponseCompressor;

/**
* Compressor class
*/
class Compressor
{

	const FILE_TYPE_CSS = "css";
	const FILE_TYPE_JS = "js";

	protected $files = [];

	protected $pageContent;
	
	function __construct()
	{
		
	}

	public function loadPage($pageContent)
	{

	}

	public function extractJSFiles(){

	}

	public function extractCSSFiles(){
		$n = preg_match_all('/"([^"]+?\.css)"/', $this->pageContent, $matches);
		if ($n !== FALSE && $n > 0) {
			var_dump($matches[1]);
		}
	}


}