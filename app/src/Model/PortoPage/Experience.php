<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class Experience extends DataObject
{
    private static $db = [
        "ETitle" => "Varchar",
        "EDescription" => "Text"
    ];

    private static $has_one = [
        "ExperienceImage" => "SilverStripe\\Assets\\Image",
        "PortoPage" => PortoPage::class
    ];

    private static $owns = ["ExperienceImage"];

    private static $table_name = 'Experience';

    public function getCMSFields()
    {
        return FieldList::create([
            TextField::create("ETitle", "Experience Title"),
            TextareaField::create("EDescription", "Your Experience Description"),
            UploadField::create("ExperienceImage", "Experience Image")
                ->setFolderName('portfolio/experience')
                ->setAllowedExtensions(['png', 'jpg', 'jpeg', 'gif'])
        ]);
    }
}