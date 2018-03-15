<?php

namespace App\Models;

class CommonModel
{
    static $states;
    static $instance = null;
    static $nhap_xuat = null;

    public function __construct()
    {
        self::$states = [
            'on'  => ['value' => 1, 'text' => __('models.common.enable'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('models.common.disable'), 'color' => 'danger'],
        ];

        self::$nhap_xuat = [
            '_NHAP_TON_KHO_DAU_KY_' => 45
        ];
    }

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance =  new self();
        }

        return self::$instance;
    }
    
    public static function getStates()
    {
        self::getInstance();
        return self::$states;
    }

    public static function getNhapXuat()
    {
        self::getInstance();
        return self::$nhap_xuat;
    }
}
