<?php
// This file is part of Moodle - http://moodle.org/

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'mitema';
//$THEME->sheets = ['custom'];//Agrega tu archivo CSS
$THEME->sheets = array(
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    'custom'
);
$THEME->editor_sheets = [];
$THEME->parents = ['boost']; // Puedes heredar de un tema base como 'boost'
$THEME->enable_dock = false; 
$THEME->yuicssmodules = array();
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_DEFAULT;
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_mitema_process_css';

$THEME->javascripts_footer = array(
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
);

$THEME->layouts = [
    // My dashboard page.
    /* 'mydashboard' => array(
        'file' => 'drawers.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true, 'langmenu' => true),
    ), */
    // La página inicial (home) y la página del sitio (site)
    'frontpage' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // Páginas del curso
    'course' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'), 
        'defaultregion' => 'side-pre',
    ),
    // Páginas generales
    'standard' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // Otras páginas específicas
    'incourse' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // Definición de diseño para la página de administración
    'admin' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // Definición de diseño para la página de login
    'login' => array(
        'file' => 'login.php',
        'regions' => array(),
    ),
];

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

