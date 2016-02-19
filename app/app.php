<?php
	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/CountRepeat.php';

    $app = new Silex\Application();

    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get("/", function() use ($app) {
		return $app['twig']->render('form.html.twig');
	});

	$app->post("/result", function() use ($app) {
		$resultNum = new CountRepeat;
		$string = $_POST['string'];
		$word = $_POST['word'];
		$result = $resultNum->countWord($string, $word);
		return $app['twig']->render('resultNum.html.twig', array('resultNum' => $result));
	});

    return $app;
?>
