<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

class PortfolioItem extends DataObject {
    private static $db = [
        'Title' => 'Varchar',
        'Description' => 'Text',
    ];

    private static $has_one = [
        'Image' => Image::class,
        'CompanyPage' => Page::class,
    ];

    private static $owns = ['Image'];

    private static $summary_fields = [
        'Title' => 'Judul',
        'Description' => 'Deskripsi',
        'Image.CMSThumbnail' => 'Gambar',
    ];

    public function getCMSFields() {
        return FieldList::create([
            TextField::create('Title', 'Judul Portfolio'),
            TextareaField::create('Description', 'Deskripsi Portfolio'),
            UploadField::create('Image', 'Gambar Portfolio')
        ]);
    }
}