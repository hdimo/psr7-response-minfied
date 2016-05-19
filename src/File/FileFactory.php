<?php
/**
 * User: khaled
 * Date: 5/9/16
 */
namespace ResponseCompressor\File;


use ResponseCompressor\Compressor;
use ResponseCompressor\Exception\FileNotExistException;

/**
 * Class FileFactory
 * @package ResponseCompressor\File
 */
class FileFactory
{
    /**
     * @param $path
     * @param $fileType
     * @return CssFile|JsFile|void
     * @throws FileNotExistException
     */
    public static function make($path , $fileType)
    {

        switch($fileType){
            case Compressor::FILE_TYPE_CSS:
                return new CssFile($path);
            break;

            case Compressor::FILE_TYPE_JS:
                return new JsFile($path);
            break;

            default:
                throw new FileNotExistException('file type not exist in list');
                return;
        }

    }
}