<?php

global $app;

$app->get('/', function () use ($app) {
    return [
        'name' => 'Scarf',
        'version' => $app->version(),
    ];
});
