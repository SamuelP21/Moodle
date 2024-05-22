<?php
// This file is part of Moodle - http://moodle.org/

defined('MOODLE_INTERNAL') || die();

echo $OUTPUT->doctype(); // Genera el doctype apropiado para la página.
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>> <!-- Añade atributos HTML necesarios como la clase de lenguaje. -->

<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <?php echo $OUTPUT->standard_head_html(); ?> <!--  Incluye todos los elementos necesarios en la etiqueta <head>. -->
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>> <!--  Añade atributos a la etiqueta <body> para control de temas y clases. -->
    <?php echo $OUTPUT->standard_top_of_body_html(); ?> <!-- Añade elementos comunes al inicio del cuerpo, como scripts de seguimiento. -->

    <div id="page">
        <!-- Renderizar la barra de navegación desde la plantilla Mustache -->
        <?php
        $primary = new core\navigation\output\primary($PAGE);
        $primarymenu = $primary->export_for_template($renderer);
        $navbarcontext = [
            'sitename' => format_string($SITE->fullname),

            'primarymoremenu' => $primarymenu['moremenu'],
            'output' => $OUTPUT,
            'config' => $CFG,
        ];
        echo $OUTPUT->render_from_template('theme_mitema/navbar', $navbarcontext);
        ?>
        <header id="page-header" class="clearfix">
            <?php echo $OUTPUT->page_heading(); ?> <!-- Muestra el encabezado de la página. -->
        </header>

        <div id="page-content" class="row">
            <div id="region-main" class="col-md-9">
                <?php echo $OUTPUT->main_content(); ?> <!-- Muestra el contenido principal de la página. -->
            </div>
            <div id="region-side-pre" class="col-md-3">
                <?php echo $OUTPUT->blocks('side-pre'); ?> <!-- Muestra los bloques asignados a la región side-pre. -->
            </div>
        </div>

        <?php echo $OUTPUT->standard_end_of_body_html(); ?>
    </div>
</body>

</html>