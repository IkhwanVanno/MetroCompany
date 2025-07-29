<?php

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\ORM\ValidationResult;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;


class SiteConfigExt extends DataExtension
{
      private static $db = [
            'HeroTitle' => 'Varchar',
            'HeroSubtitle' => 'Text',
            'AboutTitle' => 'Varchar',
            'AboutContent' => 'HTMLText',
            'ContactAddress' => 'Text',
            'ContactEmail' => 'Varchar(255)',
            'ContactPhone' => 'Varchar(50)',
            'ContactHours' => 'Text',
            'ContactInfo' => 'HTMLText',
      ];

      private static $has_one = [
            'FaviconImage' => Image::class,
            'HeroImage' => Image::class,
            'AboutImage' => Image::class,
      ];

      private static $owns = [
            'FaviconImage',
            'HeroImage',
            'AboutImage',

      ];

      private static $cascade_deletes = [
            'FaviconImage',
      ];

      /**
       * Update Fields
       * @param FieldList $fields
       * @return void
       */


      public function updateCMSFields(FieldList $fields)
      {
            $fields->addFieldsToTab('Root.Main', [
                  TextField::create('HeroTitle', 'Judul Hero'),
                  TextareaField::create('HeroSubtitle', 'Subjudul Hero'),
                  UploadField::create('HeroImage', 'Gambar Hero'),
                  TextField::create('AboutTitle', 'Judul About'),
                  HTMLEditorField::create('AboutContent', 'Konten About'),
                  UploadField::create('AboutImage', 'Gambar About'),
                  UploadField::create('FaviconImage', 'Favicon'),
                  TextField::create('ContactAddress', 'Alamat'),
                  TextField::create('ContactEmail', 'Email'),
                  TextField::create('ContactPhone', 'Telepon'),
                  TextareaField::create('ContactHours', 'Jam Operasional'),
                  HTMLEditorField::create('ContactInfo', 'Informasi Kontak Tambahan'),
            ]);
      }

      public function getCMSValidator()
      {
            return new RequiredFields(['ContactEmail']);
      }
}