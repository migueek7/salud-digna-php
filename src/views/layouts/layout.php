<?php
// header("Cache-Control: no-cache, must-revalidate");
// header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- No usar memoria cache -->
        <!-- <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache"> -->        
        <meta http-equiv="Cache-Control: max-age=31536000" content="public">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$SEO['description']?>">
        <meta name="keywords" content="<?=$SEO['keywords']?>">

        <title><?=ucfirst($SEO['title']);?> - Salud Digna</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="<?=css()?>plugins/normalize.min.css">
        <link rel="stylesheet" href="<?=css()?>plugins/animate.min.css">
        <link rel="stylesheet" href="<?=css()?>iconos.min.css">
        <link rel="stylesheet" href="<?=css()?>core.min.css">
        <link rel="stylesheet" href="<?=css()?>menu.css">
        <link rel="stylesheet" href="<?=css()?>menu-modificado.css">
        <link rel="stylesheet" href="<?=css()?>estilos.min.css">
        
        <?php if (isset($estilos)) : foreach ($estilos as $ruta) : ?>
        <link rel="stylesheet" href="<?=$ruta;?>.css">
        <?php endforeach; endif; ?>

        <!-- <link rel="stylesheet" media="(prefers-color-scheme: light)" href="<css()?>light.css"> -->
        <!-- <link rel="stylesheet" media="(prefers-color-scheme: dark)" href="<css()?>dark.css"> -->
        <link rel="stylesheet" href="<?=css()?>main.css">
        
        <style>
            .loading{position:fixed;background:var(--background-color2);height:100vh;width:100%;z-index:100;display:flex;justify-content:center;align-items:center}.loading-inactivo{-webkit-animation:fadeout 1s ease-in-out;animation:fadeout 1s ease-in-out;pointer-events:none;opacity:0}@keyframes fadein{from{opacity:0}to{opacity:1}}@keyframes fadeout{from{opacity:1}to{opacity:0}}.spinner{width:40px;height:40px;margin:100px auto;background-color:#008959;border-radius:100%;-webkit-animation:sk-scaleout 1.0s infinite ease-in-out;animation:sk-scaleout 1.0s infinite ease-in-out;position:absolute}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1.0);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1.0);transform:scale(1.0);opacity:0}}
        </style>

    </head>

    <body>
        <div id="loading" class="loading"><div class="spinner"></div></div>
        <div id="fondo-oscuro" class="fondo-oscuro"></div>
        <!-- <dark-mode-toggle id="dark-mode-toggle" dark="Modo Claro" light="Modo Oscuro"></dark-mode-toggle> -->

        <header class="header">
            <?=$this->fetch('modules/cintillo') ?>
            <?=$this->fetch('modules/navbar') ?>
            <?=$this->fetch('modules/cintillo-publicitario') ?>

        </header>

        <main class="main">
            <?=$this->section('content'); ?>
        </main>

        <footer class="footer">
            <?=$this->insert('modules/footer') ?>
        </footer>

        <!-- Script -->
        <script src="<?=js()?>funciones.js"></script>
        <script src="<?=js()?>menu.js"></script>
        <script src="<?=js()?>buscador.js"></script>
        <script src="<?=js()?>main.min.js" defer></script>
        <script type="module" src="https://googlechromelabs.github.io/dark-mode-toggle/src/dark-mode-toggle.mjs" defer></script>

        <?php 
        if (isset($scripts)) : 
            foreach ($scripts as $ruta) : ?>
            <script src="<?=$ruta["route"];?>.js" <?=isset($ruta["module"]) ? "type='module'" : '';?>></script>
        <?php 
            endforeach; 
        endif;
        ?> 

        <script>
            window.addEventListener('load', function() {document.querySelector('#loading').classList.add('loading-inactivo')});
        </script>
    </body>
</html>