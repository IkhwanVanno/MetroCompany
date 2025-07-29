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
            private static $allowed_children =[
                  "PortoPage",
            ];

            private static $can_be_root = false;

            private static $has_many = [
                  'ServiceCards' => ServiceCard::class,
                  'PortfolioItems' => PortfolioItem::class,
                  'Testimonials' => Testimonial::class,
            ];

            private static $has_one = [
            ];

            private static $owns = [
                  'ServiceCards',
                  'PortfolioItems',
                  'Testimonials',
            ];

            private static $db = [];

            public function getCMSFields()
            {
                  $fields = parent::getCMSFields();
                  return $fields;
            }
      }
}
