<?php

namespace PHPSTORM_META
{
	override(\Bitrix\Main\DI\ServiceLocator::get(0), map([
		'yngc0der.oauth2server.repository.access_token' => \League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface::class,
		'yngc0der.oauth2server.repository.auth_code' => \League\OAuth2\Server\Repositories\AuthCodeRepositoryInterface::class,
		'yngc0der.oauth2server.repository.client' => \League\OAuth2\Server\Repositories\ClientRepositoryInterface::class,
		'yngc0der.oauth2server.repository.refresh_token' => \League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface::class,
		'yngc0der.oauth2server.repository.scope' => \League\OAuth2\Server\Repositories\ScopeRepositoryInterface::class,
		'yngc0der.oauth2server.repository.user' => \League\OAuth2\Server\Repositories\UserRepositoryInterface::class,
		'yngc0der.oauth2server.grant.client_credentials' => \League\OAuth2\Server\Grant\GrantTypeInterface::class,
		'yngc0der.oauth2server.grant.client_credentials.access_token_ttl' => \DateInterval::class,
		'yngc0der.oauth2server.grant.password' => \League\OAuth2\Server\Grant\GrantTypeInterface::class,
		'yngc0der.oauth2server.grant.password.access_token_ttl' => \DateInterval::class,
		'yngc0der.oauth2server.grant.auth_code' => \League\OAuth2\Server\Grant\GrantTypeInterface::class,
        'yngc0der.oauth2server.grant.auth_code.ttl' => \DateInterval::class,
        'yngc0der.oauth2server.grant.auth_code.access_token_ttl' => \DateInterval::class,
        'yngc0der.oauth2server.grant.refresh_token' => \League\OAuth2\Server\Grant\GrantTypeInterface::class,
        'yngc0der.oauth2server.grant.refresh_token.access_token_ttl' => \DateInterval::class,
		'yngc0der.oauth2server.private_key' => \League\OAuth2\Server\CryptKey::class,
		'yngc0der.oauth2server.authorization_server' => \League\OAuth2\Server\AuthorizationServer::class,
	]));
}
