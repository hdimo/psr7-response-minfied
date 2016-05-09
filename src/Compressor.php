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
        $this->pageContent = $pageContent;
    }

    public function extractJSFiles()
    {
        $n = preg_match_all(sprintf('/"([^"]+?\.%s)"/', self::FILE_TYPE_JS), $this->pageContent, $matches);
        if ($n !== FALSE && $n > 0) {
            var_dump($matches[1]);
        }
    }

    public function extractCSSFiles()
    {
        $n = preg_match_all(sprintf('/"([^"]+?\.%s)"/', self::FILE_TYPE_CSS), $this->pageContent, $matches);
        if ($n !== FALSE && $n > 0) {
            var_dump($matches[1]);
        }
    }


    public function appendFile($files){

        if(is_array($files)){

        }

        if(is_string($files)){

        }
    }

}