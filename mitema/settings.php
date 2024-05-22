<?php
// This file is part of Moodle - http://moodle.org/
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

/**
 * Theme settings for the mitema theme.
 *
 * @package   theme_mitema
 * @copyright 2023 Your Name
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // General settings page.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingmitema', get_string('configtitle', 'theme_mitema'));

    // "General" settings tab.
    $page = new admin_settingpage('theme_mitema_general', get_string('generalsettings', 'theme_mitema'));

    // Preset.
    $name = 'theme_mitema/preset';
    $title = get_string('preset', 'theme_mitema');
    $description = get_string('preset_desc', 'theme_mitema');
    $default = 'default.scss';
    $choices = [];
    foreach (glob($CFG->dirroot . '/theme/mitema/scss/preset/*.scss') as $presetfile) {
        $preset = basename($presetfile, '.scss');
        $choices[$preset] = $preset;
    }
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $page->add($setting);

    // Brand color setting.
    $name = 'theme_mitema/brandcolor';
    $title = get_string('brandcolor', 'theme_mitema');
    $description = get_string('brandcolor_desc', 'theme_mitema');
    $default = '#ff4081';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null);
    $page->add($setting);

    // Login background image.
    $name = 'theme_mitema/loginbackground';
    $title = get_string('loginbackground', 'theme_mitema');
    $description = get_string('loginbackground_desc', 'theme_mitema');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackground');
    $page->add($setting);

    $settings->add($page);
}
