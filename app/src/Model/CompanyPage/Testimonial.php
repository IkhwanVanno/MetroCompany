<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

class Testimonial extends DataObject {
    private static $db = [
        'Name' => 'Varchar',
        'Role' => 'Varchar',
        'Message' => 'Text',
    ];

    private static $has_one = [
        'Photo' => Image::class,
        'CompanyPage' => Page::class,
    ];

    private static $owns = ['Photo'];

    private static $summary_fields = [
        'Name' => 'Nama',
        'Role' => 'Jabatan',
        'Message' => 'Pesan',
    ];

    public function getCMSFields() {
        return FieldList::create([
            TextField::create('Name', 'Nama Klien'),
            TextField::create('Role', 'Jabatan/Perusahaan'),
            TextareaField::create('Message', 'Pesan Testimoni'),
            UploadField::create('Photo', 'Foto Klien')
        ]);
    }
}