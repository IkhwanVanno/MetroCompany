<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;

class PortoPage extends Page
{
    private static $db = [
        'YourName' => 'Varchar(100)',
        'Profession' => 'Varchar(100)',
        'AboutDescription' => 'Text',
        'Email' => 'Varchar(100)',
        'Phone' => 'Varchar(20)',
        'Location' => 'Varchar(100)',
        'Website' => 'Varchar(100)'
    ];

    private static $has_one = [
        'ProfileImage' => 'SilverStripe\\Assets\\Image'
    ];

    private static $has_many = [
        'EducationalHistories' => EducationalHistory::class,
        'ExperienceAchievements' => ExperienceAchievements::class,
        'SkillsTechnologies' => SkillsTechnologies::class,
        'Experiences' => Experience::class,
        'RecentWorks' => RecentWork::class,
        'Certificates' => Certificates::class,
        'GalleryImages' => GalleryImage::class,
        'Contacts' => Contact::class
    ];

    private static $owns = [
        'ProfileImage'
    ];

    private static $table_name = 'PortoPage';

    private static $singular_name = 'Portfolio Page';
    private static $plural_name = 'Portfolio Pages';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        // Personal Information Tab
        $fields->addFieldsToTab('Root.PersonalInfo', [
            TextField::create('YourName', 'Your Name'),
            TextField::create('Profession', 'Your Profession'),
            TextareaField::create('AboutDescription', 'About Description')->setRows(5),
            UploadField::create('ProfileImage', 'Profile Image')
                ->setFolderName('portfolio/profile')
                ->setAllowedExtensions(['png', 'jpg', 'jpeg', 'gif'])
        ]);

        // Contact Information Tab
        $fields->addFieldsToTab('Root.ContactInfo', [
            EmailField::create('Email', 'Email Address'),
            TextField::create('Phone', 'Phone Number'),
            TextField::create('Location', 'Location'),
            TextField::create('Website', 'Website URL')
        ]);

        // Education Tab
        $fields->addFieldsToTab('Root.Education', [
            GridField::create(
                'EducationalHistories',
                'Educational History',
                $this->EducationalHistories(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Experience & Achievements Tab
        $fields->addFieldsToTab('Root.ExperienceAchievements', [
            GridField::create(
                'ExperienceAchievements',
                'Experience & Achievements',
                $this->ExperienceAchievements(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Skills & Technologies Tab
        $fields->addFieldsToTab('Root.SkillsTech', [
            GridField::create(
                'SkillsTechnologies',
                'Skills & Technologies',
                $this->SkillsTechnologies(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Experiences Tab
        $fields->addFieldsToTab('Root.Experiences', [
            GridField::create(
                'Experiences',
                'Experiences',
                $this->Experiences(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Recent Work Tab
        $fields->addFieldsToTab('Root.RecentWork', [
            GridField::create(
                'RecentWorks',
                'Recent Works',
                $this->RecentWorks(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Certificates Tab
        $fields->addFieldsToTab('Root.Certificates', [
            GridField::create(
                'Certificates',
                'Certificates',
                $this->Certificates(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Gallery Tab
        $fields->addFieldsToTab('Root.Gallery', [
            GridField::create(
                'GalleryImages',
                'Gallery Images',
                $this->GalleryImages(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        // Contact Tab
        $fields->addFieldsToTab('Root.ContactSections', [
            GridField::create(
                'Contacts',
                'Contact Sections',
                $this->Contacts(),
                GridFieldConfig_RecordEditor::create()
            )
        ]);

        return $fields;
    }
}