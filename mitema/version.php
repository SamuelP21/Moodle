<?php
// This file is part of Moodle - http://moodle.org/

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2024051700; // YYYYMMDDHH (Fecha y hora)
$plugin->requires  = 2023100400; // Requiere esta versión de Moodle
$plugin->component = 'theme_mitema'; // Nombre del componente
$plugin->dependencies = [
    'theme_boost' => ANY_VERSION
];
 