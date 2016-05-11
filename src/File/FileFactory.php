<?php
/**
 * Created by PhpStorm.
 * User: khaled
 * Date: 5/9/16
 * Time: 7:28 PM
 */

namespace ResponseCompressor\File;


use ResponseCompressor\Compressor;
use ResponseCompressor\Exception\FileNotExistException;

class FileFactory
{
    public static function make($info , $fileType)
    {

        switch($fileType){
            case Compressor::FILE_TYPE_CSS:
                return new CssFile($info);
            break;

            case Compressor::FILE_TYPE_JS:
                return new JsFile($info);
            break;

            default:
                throw new FileNotExistException('file type not exist in list');
                return;
        }

    }
}