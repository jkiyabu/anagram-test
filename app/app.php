<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_if_anagram", function() use ($app) {
        $anagram_Test = new Anagram;
        $is_Anagram = $anagram_Test->isAnagram($_GET['word1'], $_GET['word2']);

        return $app['twig']->render('view_if_anagram.html.twig', array('result' => $is_Anagram));
    });

    return $app;
?>
