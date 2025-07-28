<?php

use SilverStripe\SiteConfig\SiteConfig;

if (class_exists('SiteConfigExt')) {
      SiteConfig::add_extension(SiteConfigExt::class);
}