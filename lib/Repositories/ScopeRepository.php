<?php

namespace Yngc0der\OAuth2Server\Repositories;

use Bitrix\Main;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\ScopeEntity;

class ScopeRepository implements ScopeRepositoryInterface
{
    public const EVENT_ON_SCOPES_LOAD = 'OnScopesLoad';

    public function getScopeEntityByIdentifier($identifier): ?ScopeEntity
    {
        if ($identifier !== '*' && !array_key_exists($identifier, static::getScopes())) {
            return null;
        }

        $scopeEntity = new ScopeEntity();
        $scopeEntity->setIdentifier($identifier);

        return $scopeEntity;
    }

    public function finalizeScopes(
        array $scopes,
        $grantType,
        ClientEntityInterface $clientEntity,
        $userIdentifier = null
    ): array {
        if (count($scopes) === 0) {
            return [];
        }

        if (!in_array($grantType, ['password', 'personal_access', 'client_credentials'])) {
            $scopes = array_filter($scopes, function (ScopeEntityInterface $scopeEntity): bool {
                return trim($scopeEntity->getIdentifier() !== '*');
            });
        }

        $validScopesIdentifiers = array_keys(static::getScopes());

        return array_filter($scopes, function (ScopeEntityInterface $scopeEntity) use ($validScopesIdentifiers): bool {
            return in_array($scopeEntity->getIdentifier(), $validScopesIdentifiers, true);
        });
    }

    protected static function getScopes(): array
    {
        static $scopes = null;

        if ($scopes === null) {
            $scopes = [];

            $event = new Main\Event('yngc0der.oauth2server', static::EVENT_ON_SCOPES_LOAD);
            $event->send();

            foreach ($event->getResults() as $eventResult) {
                if ($eventResult->getType() !== Main\EventResult::SUCCESS) {
                    continue;
                }

                $parameters = $eventResult->getParameters();
                if (!is_array($parameters)) {
                    continue;
                }

                foreach ($parameters as $id => $description) {
                    $scopes[(string)$id] = (string)$description;
                }
            }
        }

        return $scopes;
    }
}
