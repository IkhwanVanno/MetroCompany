<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class TeamMember extends DataObject {
    private static $db = [
        'Name' => 'Varchar',
        'Position' => 'Varchar',
    ];

    private static $has_one = [
        'Photo' => Image::class,
        'CompanyPage' => Page::class,
    ];

    private static $owns = ['Photo'];

    private static $summary_fields = [
        'Name' => 'Nama',
        'Position' => 'Posisi',
        'Photo.CMSThumbnail' => 'Foto',
    ];

    public function getCMSFields() {
        return FieldList::create([
            TextField::create('Name', 'Nama Tim'),
            TextField::create('Position', 'Posisi/Jabatan'),
            UploadField::create('Photo', 'Foto Tim')
        ]);
    }
}