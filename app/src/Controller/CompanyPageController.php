<?php

use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\Email\Email;
use SilverStripe\SiteConfig\SiteConfig;

class CompanyPageController extends PageController
{
    private static $allowed_actions = [
        'emailReceive' => true,
    ];

    public function emailReceive(HTTPRequest $request)
    {
        $name = $request->postVar('name');
        $email = $request->postVar('email');
        $message = $request->postVar('message');

        Email::create()
            ->setTo(SiteConfig::current_site_config()->ContactEmail)
            ->setFrom($email)
            ->setSubject("Pesan Kontak dari: {$name}")
            ->setHTMLTemplate('CustomEmail')
            ->setData([
                'Name' => $name,
                'SenderEmail' => $email,
                'MessageContent' => $message,
            ])
            ->send();

        return $this->redirectBack();
    }


    /**
     * Ambil data kontak untuk digunakan di template
     * @return SiteConfig
     */
    public function getContactInfo()
    {
        return SiteConfig::current_site_config();
    }

    /**
     * Cek apakah ada informasi kontak yang tersedia
     * @return bool
     */
    public function hasContactInfo()
    {
        $config = SiteConfig::current_site_config();
        return (
            $config->ContactAddress ||
            $config->ContactEmail ||
            $config->ContactPhone ||
            $config->ContactHours ||
            $config->ContactInfo
        );
    }
}