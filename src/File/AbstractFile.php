<?php
/**
 * User: khaled
 * Date: 5/9/16
 */
namespace ResponseCompressor\File;
use ResponseCompressor\Exception\FileNotExistException;

/**
 * Class AbstractFile
 * @package ResponseCompressor\File
 */
abstract class AbstractFile
{
    /**
     * @var file type
     */
    protected $type;

    /**
     * @var filename
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $path;

    /**
     * @var file content
     */
    protected $content;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * minify file content
     *
     * @return file
     * @throws FileNotExistException
     */
    public function minify(){
        if(!file_exists($this->path))
            throw new FileNotExistException($this->path);

        $buffer = file_get_contents($this->getPath());
        $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
        $buffer = str_replace(': ', ':', $buffer);
        $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
        $this->setContent($buffer);
        return $this->content;
    }
}