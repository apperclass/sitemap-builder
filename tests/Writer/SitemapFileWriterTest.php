<?php

namespace Apperclass\SitemapBuilder\Tests\Writer;

use Apperclass\SitemapBuilder\Writer\SitemapFileWriter;
use Apperclass\SitemapBuilder\Tests\Filesystem\FilesystemTestCase;

class SitemapFileWriterTest extends FilesystemTestCase
{
    /**
     * @var SitemapFileWriter
     */
    protected $writer;

    /**
     * @var string
     */
    protected $path;

    public function setUp()
    {
        parent::setUp();
        $this->writer = new SitemapFileWriter();
        $this->path = $this->workspace . '/sitemap.xml';
    }

    public function testDumpThrowsExceptionIfPathIsNotSet()
    {
        try{
            $this->writer->write('hello');
        }catch (\Exception $e) {
            $this->assertEquals('Path is not set', $e->getMessage());
        }
        
    }

    public function testSetPathExceptionDirDoesntExists()
    {
        try{
            $this->writer->setPath('/../foo/sitemap.xml');;
        }catch(\Exception $e) {
            $this->assertEquals("Dir '/../foo' doesn't exists!", $e->getMessage());
        }

    }

    public function testExceptionPathIsADir()
    {
        try{
            $this->writer->setPath($this->workspace);
        }catch(\Exception $e) {
            $this->assertEquals("Path '". $this->workspace ."' is a dir not an absolute path to the output file!", $e->getMessage());
        }
    }

    public function testGetPath()
    {
        $this->writer->setPath($this->path);

        $this->assertEquals($this->path, $this->writer->getPath());
    }

    public function testDump()
    {
        $this
            ->writer
            ->setPath($this->path)
            ->write('foobar');

        $this->assertEquals('foobar', file_get_contents($this->path));
    }
} 