<?php

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//require __DIR__ . '/vendor/avtomon/sami-markdown/src/SamiTwigExtension.php';

use Sami\{
    Parser\Filter\TrueFilter,
    Sami
};

$sami = new Sami(__DIR__ . '/src', array(
    'theme'                => 'github',
    //'theme'                => 'markdown',
    'title'                => '_PDO API',
    'build_dir'            => __DIR__.'/docs',
    'cache_dir'            => __DIR__.'/cache',
    'template_dirs'        => array(__DIR__.'/vendor/devedge/sami-github'),
    //'template_dirs'        => array(__DIR__.'/vendor/avtomon/sami-markdown/src'),
));
// document all methods and properties
$sami['filter'] = function () {
    return new TrueFilter();
};

//$sami["twig"]->addExtension(new Markdown\SamiTwigExtension());

return $sami;