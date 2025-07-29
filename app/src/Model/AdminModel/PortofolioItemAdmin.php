<?php

use SilverStripe\Admin\ModelAdmin;

class PortofolioItemAdmin extends ModelAdmin{
    private static $menu_title = "Portofolio Items";
    private static $url_segment = "portofolio-items";

    private static $menu_icon = "";
    private static $managed_models = [
        "PortofolioItem",
    ];
}