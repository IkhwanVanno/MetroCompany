<?php
// Contact.php - Fixed version
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;

class Contact extends DataObject
{
    private static $db = [
        "ContactTitle" => "Varchar",
        "ContactDescription" => "Text",
    ];

    private static $has_one = [
        "PortoPage" => PortoPage::class,
    ];

    private static $table_name = 'Contact';

    public function getCMSFields()
    {
        return FieldList::create([
            TextField::create("ContactTitle", "Contact Title"),
            TextareaField::create("ContactDescription", "Contact Description"),
        ]);
    }
}