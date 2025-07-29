<?php

use SilverStripe\Admin\ModelAdmin;

class ServiceCardAdmin extends ModelAdmin
{

    private static $menu_title = "Service Cards";
    private static $url_segment = "service-cards";

    private static $menu_icon = "";
    private static $managed_models = [
        "ServiceCard",
    ];
}