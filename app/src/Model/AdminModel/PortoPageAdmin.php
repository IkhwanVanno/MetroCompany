<?php

use SilverStripe\Admin\ModelAdmin;

class PortoPageAdmin extends ModelAdmin{
    private static $menu_title = "PortoCardPage";
    private static $url_segment = "portocardpage";

    private static $menu_icon = "";
    private static $managed_models = [
        "PortoPage",
    ];
}