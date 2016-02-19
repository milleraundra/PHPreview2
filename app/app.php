<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CountRepeat.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get('/runCount', function() use ($app) {
        $run_count = new CountRepeat;
        $result = $run_count->trackCount($_GET['sentence'], $_GET['word']);
        $count = $result[0];
        $sentence = $result[1];
        return $app['twig']->render('index.html.twig', array('count'=> $count, 'sentence'=> $sentence));
    });

    return $app;

 ?>
