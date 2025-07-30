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
        'CompanyPage' => CompanyPage::class,
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
        if ($this->CompanyPage() && $this->CompanyPage()->exists()) {
            return $this->CompanyPage()->Link('showService/' . $this->ID);
        }

        $companyPage = CompanyPage::get()->first();
        if ($companyPage) {
            return $companyPage->Link('showService/' . $this->ID);
        }

        return '#';
    }
}