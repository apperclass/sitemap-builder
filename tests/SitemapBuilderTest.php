<?php

namespace Apperclass\SitemapBuilder\Tests;

use Apperclass\SitemapBuilder\SitemapBuilder;
use Apperclass\SitemapBuilder\Tests\Fixtures\SitemapPopulatorExample;


class SitemapGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SitemapBuilder
     */
    protected $sitemapBuilder;

    public function setUp()
    {
        $this->sitemapBuilder = new SitemapBuilder();
        $this->sitemapBuilder->addSitemapPopulator(new SitemapPopulatorExample());
    }

    public function testBuild()
    {
        $sitemap = $this
            ->sitemapBuilder
            ->build();

        $this->assertInstanceOf('Apperclass\SitemapBuilder\Model\SitemapInterface', $sitemap);
    }
}
