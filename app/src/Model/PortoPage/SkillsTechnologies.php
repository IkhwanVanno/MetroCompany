<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class SkillsTechnologies extends DataObject
{
    private static $db = [
        "STList" => "Varchar"
    ];

    private static $has_one = [
        "PortoPage" => PortoPage::class
    ];

    private static $table_name = 'SkillsTechnologies';

    public function getCMSFields() 
    {
        return FieldList::create([
            TextField::create('STList', 'Skills & Technologies you have')
        ]);
    }
}