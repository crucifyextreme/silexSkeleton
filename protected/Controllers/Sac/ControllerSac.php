<?php

namespace Controllers\Sac;

use ___PHPSTORM_HELPERS\object;
use Silex\Application;
use Silex\Route;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Acl\Exception\Exception;

class ControllerSac implements ControllerProviderInterface
{

    public function connect(Application $app)
    {
        $index = new ControllerCollection(new Route());

        /**
         * ROTA PRINCIPAL.
         */
        $index->get('/', function( Request $request ) use ($app) {
            return "Controller Sac Executado";
        });


        return $index;
    }
}
