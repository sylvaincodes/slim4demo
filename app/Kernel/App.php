<?php

namespace Slim4demo\Kernel ;

use DI\Bridge\Slim\Bridge;
use DI\ContainerBuilder;

class App extends Bridge 
{
     protected function configureContainer(ContainerBuilder $builder){
        $builder->addDefinitions([
		'settings.displayErrorDetails' => true,
            "determineRouteBeforeAppMiddleware" => true,
		]);

		$builder->addDefinitions(__DIR__ . '/container.php');
     }
}
