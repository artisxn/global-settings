<?php

namespace codicastudio\NovaSettingsTool\Events;

use codicastudio\NovaSettingsTool\ValueObjects\SettingRegister;
use Illuminate\Queue\SerializesModels;

/**
 * Class SettingsRegistering
 * @package codicastudio\NovaSettingsTool\Events
 */
final class SettingsRegistering
{
    use SerializesModels;

    /**
     * @var SettingRegister
     */
    public $settingRegister;

    /**
     * Create a new SettingRegister instance.
     *
     * @param  SettingRegister  $settingRegister
     * @return void
     */
    public function __construct(SettingRegister $settingRegister)
    {
        $this->settingRegister = $settingRegister;
    }
}
