<?php 

function d($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
//dubug & die
function dd($var)
{
   d($var);
   die();
}

$docroot = $_SERVER['DOCUMENT_ROOT'];
$config = $_SERVER['DOCUMENT_ROOT'].'/php-batch-12';
$head = $config.'/partials/head.php';
$nav = $config.'/partials/nav.php';
$saidber_mobile = $config.'/partials/saidbermobile.php';
$user_menu = $config.'/partials/user_menu.php';
$saidber_main = $config.'/partials/saidber_main.php';
$saidber_forms = $config.'/partials/saidber_forms.php';
$saidber_components = $config.'/partials/saidber_components.php';
$saidber_layout = $config.'/partials/saidber_layoutg.php';

?>