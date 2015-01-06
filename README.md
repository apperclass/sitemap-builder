# Apperclass Sitemap Builder

[![Build Status](https://travis-ci.org/apperclass/sitemap-builder.svg)](https://travis-ci.org/apperclass/sitemap-builder)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/apperclass/sitemap-builder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/apperclass/sitemap-builder/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/apperclass/sitemap-builder/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/apperclass/sitemap-builder/?branch=master)

Apperclass Sitemap Builder library help you to create a sitemap for your site.


## Install

The recommended way to install SitemapBuilder is through composer.

Just create a composer.json file for your project:

```json
{
    "require": {
        "apperclass/sitemap-builder": "dev-master"
    },
    "repositories" : [
        { "type":"vcs", "url":"https://github.com/apperclass/sitemap-builder.git" }
    ]
}
```

And run:

```shell

$ wget http://getcomposer.org/composer.phar
$ php composer.phar install

```

## Usage

Here is the minimal code required to get a working sitemap builder:

```php

<?php

use Apperclass\SitemapBuilder\SitemapBuilder;
use Apperclass\SitemapBuilder\SitemapPopulatorInterface;
use Apperclass\SitemapBuilder\Model\SitemapInterface;
use Apperclass\SitemapBuilder\Encoder\SitemapXmlEncoder;
use Apperclass\SitemapBuilder\Writer\SitemapFileWriter;

class SitemapPopulator implements SitemapPopulatorInterface
{
    public function populate(SitemapInterface $sitemap)
    {
        $sitemapUrl = new SitemapUrl();
        $sitemapUrl->setLoc('http://www.apperclass.com');
        $sitemap->addSitemapUrl($sitemapUrl);
    }
}

$sitemapBuilder = new SitemapBuilder();
$sitemapBuilder->addSitemapPopulator(new SitemapPopulator());

$sitemapEncoder    = new SitemapXmlEncoder();
$sitemapFileWriter = new SitemapFileWriter();

$sitemapFileWriter
    ->setPath(__DIR__ . '/sitemap.xml');
    ->write($sitemapEncoder->encode($sitemapBuilder->build()));

```
