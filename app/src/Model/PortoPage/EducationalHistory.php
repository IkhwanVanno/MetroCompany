<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class EducationalHistory extends DataObject
{
    private static $db = [
        "EHList" => "Varchar"
    ];

    private static $has_one = [
        "PortoPage" => PortoPage::class
    ];

    private static $table_name = 'EducationalHistory';

    public function getCMSFields() 
    {
        return FieldList::create([
            TextField::create('EHList', 'Educational History you have')
        ]);
    }
}