<?php
/**
 * User: khaled
 * Date: 5/9/16
 */
namespace ResponseCompressor\File;

/**
 * Interface FactoryInterface
 * @package ResponseCompressor\File
 */
interface FactoryInterface
{
    /**
     * make file compressor object
     *
     * @param $path
     * @param $type
     * @return AbstractFile
     */
    public function make($path, $type);
}