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

<body <?php /* echo $OUTPUT->body_attributes(); */ ?>> <!--  Añade atributos a la etiqueta <body> para control de temas y clases. -->
    <?php echo $OUTPUT->standard_top_of_body_html(); ?> <!-- Añade elementos comunes al inicio del cuerpo, como scripts de seguimiento. -->

           

    <div class="container-fluid">
         <div id="page-content" class="row" style="padding: 0; background-image: url(theme/mitema/images/BackgroundLogo.png); background-size: cover; background-position: center; height: 100vh;">
            <div class="col-md-7" style="padding: 0;">
                <div class="row">
                    <div class="col-md-2 position-absolute top-50 start-100 translate-middle">
                        <h1 class="text-light"><</h1>
                    </div>
                </div>
            <!-- <img src="theme/mitema/images/BackgroundLogo.png" alt="Imagen" style="width: 100%; height: 100vh; object-fit: cover;"> -->
                <div style="background-color: #255541; position: absolute; bottom: 0; width: 110%;" class="row pl-3 pt-2 pb-2">
                    <div class="col-md-2 d-flex justify-content-center align-items-center mx-auto">
                        <img src="theme/mitema/images/logoBlanco.png" alt="logo" style="max-width: 90%; max-height: 100vh; object-fit: cover;">
                    </div>
                    <div class="col-md-10">
                        <p class="mb-1 text-light">© copyright. All blabla bla bla</p>
                        <p class="mb-1 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 custom-col" style="background-color: #f8f9fa; height: 100vh;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <?php echo $OUTPUT->main_content(); ?> <!-- Muestra el contenido principal de la página. -->
                </div>
            </div>
        </div>
        
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html(); ?>
   
</body>

</html>



