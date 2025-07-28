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

            'ContactAddress' => 'Text',
            'ContactEmail' => 'Varchar(255)',
            'ContactPhone' => 'Varchar(50)',
            'ContactHours' => 'Text',
            'ContactInfo' => 'HTMLText',
      ];

      private static $has_one = [
            'FaviconImage' => Image::class,
      ];

      private static $owns = [
            'FaviconImage',

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