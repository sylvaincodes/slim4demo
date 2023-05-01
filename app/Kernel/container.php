<?php
use function DI\get;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Interop\Container\ContainerInterface;

return [

    // recuperer la route 
    'router' => get(Slim\Router::class),

    // creer la vue
    Twig::class => function(ContainerInterface $c){
        $twig = new Twig(__DIR__.'/../../resources/views',
            ['cache' => false]
        );
        $twig->addExtension(new TwigExtension(
			$c->get('router'),
			$c->get('request')->getUri()
		));

        return $twig;
    }

];
