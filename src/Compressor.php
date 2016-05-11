<?php
/**
 * User: khaled
 * Date: 5/9/16
 */
namespace ResponseCompressor;

use ResponseCompressor\Exception\FileNotExistException;
use ResponseCompressor\Exception\MissingArgumentException;
use ResponseCompressor\File\FileFactory;

/**
 * Compressor class
 */
class Compressor
{

    const FILE_TYPE_CSS = "css";
    const FILE_TYPE_JS = "js";

    /**
     * @var array
     */
    protected $files = [];

    /**
     * @var
     */
    protected $basePath;

    /**
     * @var
     */
    protected $pageContent;

    /**
     * Compressor constructor.
     * @param $config
     */
    function __construct($config)
    {
        if(!isset($config['base_path']))
            throw new MissingArgumentException('base path is missing');
        $this->basePath = $config['base_path'];
    }

    /**
     * load html page
     *
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

    /**
     * load css files
     *
     * @throws Exception\FileNotExistException
     */
    public function extractCssFiles()
    {
        return $this->extractFiles(self::FILE_TYPE_CSS);
    }

    /**
     * loads js files
     *
     * @throws FileNotExistException
     */
    public function extractJsFiles()
    {
        return $this->extractFiles(self::FILE_TYPE_JS);
    }

    /**
     * load files based on type
     *
     * @param $type (js | css)
     * @throws FileNotExistException
     */
    private function extractFiles($type){
        $n = preg_match_all(sprintf('/"([^"]+?\.%s)"/', $type), $this->pageContent, $matches);
        if ($n !== FALSE && $n > 0) {
            foreach($matches[1] as $fl){
                if(!preg_match("#(http://)#i", $fl)){
                    $fl = $this->basePath.$fl;
                    if(!file_exists($fl)){
                        throw new FileNotExistException(sprintf("file %s", $fl));
                    }
                }
                $this->files[$type][] = FileFactory::make($fl, $type);
            }
        }
    }

    /**
     * get one name of all union files
     *
     * @param $type
     * @return string
     */
    public function getCannonicalName($type){
        $cannonicalFileName ='';
        foreach($this->files[$type] as $file){
            $cannonicalFileName .= str_replace(".$type", "", $file->getName());
        }
        return sprintf("%s.%s", $cannonicalFileName, $type);
    }

    /**
     * group all minimised content of files base on type in one content
     *
     * @param $type
     * @return string
     */
    public function getFinalFileContent($type){
        $content ='';
        foreach($this->files[$type] as $file){
            $content .= $file->getContent();
        }
        return $content;
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