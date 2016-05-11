<?php
/**
 * User: khaled
 * Date: 5/9/16
 */
namespace ResponseCompressor\File;


/**
 * Class CssFile
 * @package ResponseCompressor\File
 */
class CssFile extends AbstractFile
{
    /**
     * @var string
     */
    protected $type = "css";

    /**
     * CssFile constructor.
     * @param $path
     */
    public function __construct($path)
    {
        $this->path = $path;
        $this->loadInfo();
    }

    /**
     * load information name, minimised content from given path , link
     */
    public function loadInfo(){
        $ex = explode('/',$this->path);
        $this->setName(array_pop($ex));
        $this->minify();
    }
}