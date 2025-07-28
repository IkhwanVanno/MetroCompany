<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class ExperienceAchievements extends DataObject
{
    private static $db = [
        "EAList" => "Varchar"
    ];

    private static $has_one = [
        "PortoPage" => PortoPage::class
    ];

    private static $table_name = 'ExperienceAchievements';

    public function getCMSFields() 
    {
        return FieldList::create([
            TextField::create('EAList', 'Experience Achievements you have')
        ]);
    }
}