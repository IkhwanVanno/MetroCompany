<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

class ServiceCard extends DataObject
{
    private static $db = [
        'Title' => 'Varchar',
        'Content' => 'Text',
    ];

    private static $has_one = [
        'CompanyPage' => Page::class,
    ];

    private static $summary_fields = [
        'Title' => 'Judul Layanan',
        'Content' => 'Deskripsi',
    ];

    public function getCMSFields()
    {
        return FieldList::create([
            TextField::create('Title', 'Judul Layanan'),
            TextareaField::create('Content', 'Deskripsi Layanan')
        ]);
    }

    public function Link()
    {
        return $this->CompanyPage()->Link('showservice/' . $this->ID);

    }

}