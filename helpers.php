<?php
if (!function_exists('settings')) {
    function settings() {
        \codicastudio\NovaSettingsTool\ValueObjects\SettingRegister::getInstance();
    }
}

if (!function_exists('setting')) {
    function setting(string $key) {
        return \codicastudio\NovaSettingsTool\ValueObjects\SettingRegister::getSettingItem($key);
    }
}

if (!function_exists('settingValue')) {
    function settingValue(string $key) {
        $settingValue = \codicastudio\NovaSettingsTool\Entities\SettingValue::findByKey($key);
        if ($settingValue->count() > 0) {
            return $settingValue->first()->value;
        }
        return null;
    }
}