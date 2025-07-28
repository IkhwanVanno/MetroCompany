<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class Certificates extends DataObject
{
    private static $db = [
        "CTitle" => "Varchar",
        "CDescription" => "Text"
    ];

    private static $has_one = [
        "CertificateImage" => "SilverStripe\\Assets\\Image",
        "PortoPage" => PortoPage::class
    ];

    private static $owns = [
        "CertificateImage"
    ];

    private static $table_name = 'Certificates';

    public function getCMSFields()
    {
        return FieldList::create([
            TextField::create("CTitle", "Certificate Title"),
            TextareaField::create("CDescription", "Your Certificate Description"),
            UploadField::create("CertificateImage", "Certificate Image")
                ->setFolderName('portfolio/certificates')
                ->setAllowedExtensions(['png', 'jpg', 'jpeg', 'gif'])
        ]);
    }
}