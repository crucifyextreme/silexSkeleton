<?php

$app = new Silex\Application();
$app['debug'] = true;


/**
 * Registrando a pasta Models
 */
$app->register(new Providers\ModelsServiceProvider(), array(
    'models.path' =>  __DIR__."/protected/Models/"
));


/**
 * Registrando Session
 */
$app->register(new Silex\Provider\SessionServiceProvider());

/**
 * Registrando o Twig
 */
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/protected/views/',
));

/**
 * Configurando o arquivo YAML
 */
$app["config"] = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__."/protected/config/app.config.yml"));
/**
 * Registrando o Doctrine Dbal
 */
$app->register(new Silex\Provider\DoctrineServiceProvider(), array( 'db.options' => $app["config"]["database"]));

$app->mount('/', new Controllers\Sac\ControllerSac());


$app->run();

