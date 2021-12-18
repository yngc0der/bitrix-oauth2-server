<?php

return [
    'services' => [
        'value' => [
            'yngc0der.oauth2server.repository.access_token' => [
                'className' => Yngc0der\OAuth2Server\Repositories\AccessTokenRepository::class,
            ],
            'yngc0der.oauth2server.repository.auth_code' => [
                'className' => Yngc0der\OAuth2Server\Repositories\AuthCodeRepository::class,
            ],
            'yngc0der.oauth2server.repository.client' => [
                'className' => Yngc0der\OAuth2Server\Repositories\ClientRepository::class,
            ],
            'yngc0der.oauth2server.repository.refresh_token' => [
                'className' => Yngc0der\OAuth2Server\Repositories\RefreshTokenRepository::class,
            ],
            'yngc0der.oauth2server.repository.scope' => [
                'className' => Yngc0der\OAuth2Server\Repositories\ScopeRepository::class,
            ],
            'yngc0der.oauth2server.repository.user' => [
                'className' => Yngc0der\OAuth2Server\Repositories\UserRepository::class,
            ],
            'yngc0der.oauth2server.grant.client_credentials' => [
                'className' => League\OAuth2\Server\Grant\ClientCredentialsGrant::class,
            ],
            'yngc0der.oauth2server.grant.client_credentials.access_token_ttl' => [
                'className' => DateInterval::class,
                'constructorParams' => ['PT1H'],
            ],
            'yngc0der.oauth2server.grant.password' => [
                'className' => League\OAuth2\Server\Grant\PasswordGrant::class,
                'constructorParams' => function (): array {
                    $container = Bitrix\Main\DI\ServiceLocator::getInstance();
                    return [
                        $container->get('yngc0der.oauth2server.repository.user'),
                        $container->get('yngc0der.oauth2server.repository.refresh_token'),
                    ];
                },
            ],
            'yngc0der.oauth2server.grant.password.access_token_ttl' => [
                'className' => DateInterval::class,
                'constructorParams' => ['PT1H'],
            ],
            'yngc0der.oauth2server.grant.auth_code' => [
                'className' => League\OAuth2\Server\Grant\AuthCodeGrant::class,
                'constructorParams' => function (): array {
                    $container = Bitrix\Main\DI\ServiceLocator::getInstance();
                    return [
                        $container->get('yngc0der.oauth2server.repository.auth_code'),
                        $container->get('yngc0der.oauth2server.repository.refresh_token'),
                        $container->get('yngc0der.oauth2server.grant.auth_code.ttl'),
                    ];
                },
            ],
            'yngc0der.oauth2server.grant.auth_code.ttl' => [
                'className' => DateInterval::class,
                'constructorParams' => ['PT10M'],
            ],
            'yngc0der.oauth2server.grant.auth_code.access_token_ttl' => [
                'className' => DateInterval::class,
                'constructorParams' => ['PT1H'],
            ],
            'yngc0der.oauth2server.grant.refresh_token' => [
                'className' => League\OAuth2\Server\Grant\RefreshTokenGrant::class,
                'constructorParams' => function (): array {
                    $container = Bitrix\Main\DI\ServiceLocator::getInstance();
                    return [
                        $container->get('yngc0der.oauth2server.repository.refresh_token'),
                    ];
                },
            ],
            'yngc0der.oauth2server.grant.refresh_token.access_token_ttl' => [
                'className' => DateInterval::class,
                'constructorParams' => ['PT1H'],
            ],
            'yngc0der.oauth2server.private_key' => [
                'className' => League\OAuth2\Server\CryptKey::class,
                'constructorParams' => function (): array {
                    $configuration = Bitrix\Main\Config\Configuration::getValue('yngc0der.oauth2server');
                    return [
                        $configuration['private_key'],
                        $configuration['private_key_passphrase'],
                    ];
                },
            ],
            'yngc0der.oauth2server.authorization_server' => [
                'constructor' => function (): League\OAuth2\Server\AuthorizationServer {
                    $container = Bitrix\Main\DI\ServiceLocator::getInstance();
                    $configuration = Bitrix\Main\Config\Configuration::getValue('yngc0der.oauth2server');

                    $server = new League\OAuth2\Server\AuthorizationServer(
                        $container->get('yngc0der.oauth2server.repository.client'),
                        $container->get('yngc0der.oauth2server.repository.access_token'),
                        $container->get('yngc0der.oauth2server.repository.scope'),
                        $container->get('yngc0der.oauth2server.private_key'),
                        $configuration['encryption_key']
                    );

                    $server->enableGrantType(
                        $container->get('yngc0der.oauth2server.grant.client_credentials'),
                        $container->get('yngc0der.oauth2server.grant.client_credentials.access_token_ttl')
                    );

                    $server->enableGrantType(
                        $container->get('yngc0der.oauth2server.grant.password'),
                        $container->get('yngc0der.oauth2server.grant.password.access_token_ttl')
                    );

                    $server->enableGrantType(
                        $container->get('yngc0der.oauth2server.grant.refresh_token'),
                        $container->get('yngc0der.oauth2server.grant.refresh_token.access_token_ttl')
                    );

                    $server->enableGrantType(
                        $container->get('yngc0der.oauth2server.grant.auth_code'),
                        $container->get('yngc0der.oauth2server.grant.auth_code.access_token_ttl')
                    );

                    return $server;
                },
            ],
        ],
    ],
];
