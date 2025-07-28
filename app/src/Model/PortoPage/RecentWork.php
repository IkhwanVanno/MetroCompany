<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class RecentWork extends DataObject
{
    private static $db = [
        "RWTitle" => "Varchar",
        "RWDescription" => "Text",
        "WorkLink" => "Varchar(255)"
    ];

    private static $has_one = [
        "WorkImage" => "SilverStripe\\Assets\\Image",
        "PortoPage" => PortoPage::class
    ];

    private static $owns = [
        "WorkImage"
    ];

    private static $table_name = 'RecentWork';

    public function getCMSFields()
    {
        return FieldList::create([
            TextField::create("RWTitle", "Recent Work Title"),
            TextareaField::create("RWDescription", "Your Recent Work Description"),
            TextField::create("WorkLink", "Project Link (URL)"),
            UploadField::create("WorkImage", "Work Image")
                ->setFolderName('portfolio/work')
                ->setAllowedExtensions(['png', 'jpg', 'jpeg', 'gif'])
        ]);
    }
}