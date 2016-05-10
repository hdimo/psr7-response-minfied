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

    /**
     * @param $pageContent
     */
    public function loadPage($pageContent)
    {
        $this->pageContent = $pageContent;
    }

    /**
     * @return mixed
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }


    public function extractJSFiles()
    {
        $n = preg_match_all(sprintf('/"([^"]+?\.%s)"/', self::FILE_TYPE_JS), $this->pageContent, $matches);
        if ($n !== FALSE && $n > 0) {
            foreach($matches[1] as $fl){
                $this->files[self::FILE_TYPE_CSS] = FileFactory::make($fl, self::FILE_TYPE_CSS);
            }
            //var_dump($matches[1]);
        }
    }

    public function extractCSSFiles()
    {
        $n = preg_match_all(sprintf('/"([^"]+?\.%s)"/', self::FILE_TYPE_JS), $this->pageContent, $matches);
        if ($n !== FALSE && $n > 0) {
            $this->files[self::FILE_TYPE_JS] = $matches[1];
        }
    }


    public function appendFile($files){

        if(is_array($files)){

        }

        if(is_string($files)){

        }
    }

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param array $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }



}