<?php

namespace Apperclass\SitemapBuilder\Tests\Filesystem;

abstract class FilesystemTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string $workspace
     */
    protected $workspace = null;
    protected static $symlinkOnWindows = null;
    public static function setUpBeforeClass()
    {
        if (defined('PHP_WINDOWS_VERSION_MAJOR')) {
            static::$symlinkOnWindows = true;
            $originDir = tempnam(sys_get_temp_dir(), 'sl');
            $targetDir = tempnam(sys_get_temp_dir(), 'sl');
            if (true !== @symlink($originDir, $targetDir)) {
                $report = error_get_last();
                if (is_array($report) && false !== strpos($report['message'], 'error code(1314)')) {
                    static::$symlinkOnWindows = false;
                }
            }
        }
    }

    public function setUp()
    {
        $this->workspace = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.time().rand(0, 1000);
        mkdir($this->workspace, 0777, true);
        $this->workspace = realpath($this->workspace);
    }

    public function tearDown()
    {
        if($this->workspace) { $this->clean($this->workspace); }
    }

    /**
     * @param string $file
     */
    protected function clean($file)
    {
        if (is_dir($file) && !is_link($file)) {
            $dir = new \FilesystemIterator($file);
            foreach ($dir as $childFile) {
                $this->clean($childFile);
            }
            rmdir($file);
        } else {
            unlink($file);
        }
    }
}