<?php 
require_once dirname(__FILE__).'/conf/conf.php';
require_once dirname(__FILE__).'/vendor/autoload.php';
require_once dirname(__FILE__).'/mod/Core/Core.php';
require_once dirname(__FILE__).'/mod/Youtube/Youtube.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
    'auto_reload' => true,
));

$youtube = new Youtube();

$action = $_GET['action'];

if ($action == 'search') {
    $youtube->addRequests($_POST['search']);
    header("Location: /");
} else {
    $data = array(
        'requests' => $youtube->getRequests(),
        'str' => $youtube->str,
    );

    $vars = array(        
        'title' => 'Youtube Parser',
        'content' => $twig->render('data.html.twig', $data),
    );
}

echo $twig->render('default.html.twig', $vars);