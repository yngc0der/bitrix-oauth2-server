<?php

use Bitrix\Main\Routing\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->post(
        '/oauth/token',
        [Yngc0der\OAuth2Server\Controllers\AuthorizationController::class, 'token']
    );
    $routes->post(
        '/oauth/authorize',
        [Yngc0der\OAuth2Server\Controllers\AuthorizationController::class, 'authorize']
    );
};
