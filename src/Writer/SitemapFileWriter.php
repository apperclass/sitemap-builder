<?php

namespace Apperclass\SitemapBuilder\Writer;

class SitemapFileWriter implements SitemapWriterInterface
{
    protected $path;

    /**
     * @param $string
     * @throws \Exception
     */
    public function write($string)
    {
        if(!$this->path) {
            throw new \Exception('Path is not set');
        }

        file_put_contents($this->path, $string);
    }

    /**
     * @param $path
     * @return $this
     * @throws \Exception
     */
    public function setPath($path)
    {
        // check: dir exists
        if(!realpath(dirname($path))) {
            throw new \Exception("Dir '" . dirname($path) . "' doesn't exists!");
        }

        // check: path is not a dir
        if(is_dir($path)) {
            throw new \Exception("Path '" . $path . "' is a dir not an absolute path to the output file!");
        }

        $this->path = $path;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }
}