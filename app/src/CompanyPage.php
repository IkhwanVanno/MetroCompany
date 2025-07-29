<?php

namespace {

      use SilverStripe\CMS\Model\SiteTree;
      use SilverStripe\Forms\FieldList;
      use SilverStripe\Forms\TextField;
      use SilverStripe\Forms\TextareaField;
      use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
      use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
      use SilverStripe\Assets\Image;
      use SilverStripe\AssetAdmin\Forms\UploadField;
      use SilverStripe\Forms\GridField\GridField;

      class CompanyPage extends Page
      {
            private static $table_name = 'CompanyPage';
            private static $allowed_children = [
                  "PortoPage",
            ];

            private static $has_many = [
                  'ServiceCards' => ServiceCard::class,
                  'PortofolioItem' => PortofolioItem::class,
                  'Testimonials' => Testimonial::class,
            ];

            private static $has_one = [
            ];

            private static $owns = [
                  'ServiceCards',
                  'PortofolioItem',
                  'Testimonials',
            ];
      }
}
