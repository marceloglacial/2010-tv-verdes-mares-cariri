<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link href="<?php bloginfo('template_url'); ?>/css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
        <!--[if IE]>
            <link href="<?php bloginfo('template_url'); ?>/css/estilos-ie.css" rel="stylesheet" type="text/css" media="screen" />
        <![endif]-->
<?php
	wp_head();
?>

    </head>
    <body id="TVMCaririAniversario" class="">
        <!-- SITE -->
        <div id="Site">
            <!-- CABECALHO -->
            <div id="Cabecalho">
                <h1><a href="<?php bloginfo('url'); ?>" title="Ir para a página inicial"><?php bloginfo('name'); ?></a></h1>
            </div>
            <!-- FIM DE CABECALHO -->
            <hr/>
            <!-- MENU -->
            <div id="Menu">
                <ul>
                    <?php wp_list_pages('title_li=<h2>' . __('Menu') . '</h2>' ); ?>
                </ul>
            </div>
            <!-- FIM DE MENU -->
            <hr/>