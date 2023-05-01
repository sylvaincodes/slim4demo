<?php
$app->get('/',function ($request, $response) {
    // Show book identified by $args['id']
    // return $response->withRedirect ((string)($request->getUri()->withPath('assets')));
    $response->getBody()->write('Hello!');
    return $response;
});
