<?php

class PortoPageController extends PageController{

    private static $allowed_actions = [
        'index',
    ];
    public function index(){
        return $this->renderWith(['PortoPage', 'Page']);
    }
};