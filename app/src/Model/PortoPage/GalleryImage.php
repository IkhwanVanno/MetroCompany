<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataObject;

class GalleryImage extends DataObject
{
    private static $has_one = [
        "GalleryImage" => "SilverStripe\\Assets\\Image",
        "PortoPage" => PortoPage::class
    ];

    private static $owns = ["GalleryImage"];

    private static $table_name = 'GalleryImage';

    public function getCMSFields()
    {
        return FieldList::create([
            UploadField::create("GalleryImage", "Gallery Image")
                ->setFolderName('portfolio/gallery')
                ->setAllowedExtensions(['png', 'jpg', 'jpeg', 'gif'])
        ]);
    }
}