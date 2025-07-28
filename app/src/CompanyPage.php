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
                  'HeroImage' => Image::class,
                  'AboutImage' => Image::class,
            ];

            private static $owns = [
                  'ServiceCards',
                  'PortfolioItems',
                  'Testimonials',
                  'HeroImage',
                  'AboutImage',
            ];

            private static $db = [
                  'HeroTitle' => 'Varchar',
                  'HeroSubtitle' => 'Text',
                  'AboutTitle' => 'Varchar',
                  'AboutContent' => 'HTMLText',
            ];

            public function getCMSFields()
            {
                  $fields = parent::getCMSFields();

                  $fields->addFieldsToTab('Root.Hero', [
                        TextField::create('HeroTitle', 'Judul Hero'),
                        TextareaField::create('HeroSubtitle', 'Subjudul Hero'),
                        UploadField::create('HeroImage', 'Gambar Hero'),
                  ]);

                  $fields->addFieldsToTab('Root.About', [
                        TextField::create('AboutTitle', 'Judul About'),
                        HTMLEditorField::create('AboutContent', 'Konten About'),
                        UploadField::create('AboutImage', 'Gambar About'),
                  ]);
                  
                  $fields->addFieldsToTab('Root.Services', [
                        GridField::create('ServiceCards', 'Kartu Layanan', $this->ServiceCards(), GridFieldConfig_RecordEditor::create())
                  ]);

                  $fields->addFieldsToTab('Root.Portfolio', [
                        GridField::create('PortfolioItems', 'Portfolio Items', $this->PortfolioItems(), GridFieldConfig_RecordEditor::create())
                  ]);

                  $fields->addFieldsToTab('Root.Testimonials', [
                        GridField::create('Testimonials', 'Testimoni', $this->Testimonials(), GridFieldConfig_RecordEditor::create())
                  ]);

                  return $fields;
            }
      }
}
