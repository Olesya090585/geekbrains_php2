<?php

const Photo_small = 'img/small';
const Photo_big = 'img/big';

require_once '../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$template = $twig->LoadTemplate('index.tmpl');

$photo_list = array_slice(scandir(Photo_small), 2);
echo $template->render(array(
    'title' => 'Список фотографий альбома',
    'small_photo' => Photo_small,
    'photo' => $photo_list,
    'big_photo' => Photo_big,
));