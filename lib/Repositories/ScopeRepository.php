<?php

namespace Yngc0der\OAuth2Server\Repositories;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\ScopeEntity;
use Yngc0der\OAuth2Server\Tables\ScopesTable;

class ScopeRepository implements ScopeRepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function getScopeEntityByIdentifier($identifier)
    {
        $scope = ScopesTable::query()
            ->addSelect('ID')
            ->where('ID', $identifier)
            ->fetchObject();

        if ($scope === null) {
            return null;
        }

        $scopeEntity = new ScopeEntity();
        $scopeEntity->setIdentifier($scope->getId());

        return $scopeEntity;
    }

    /**
     * {@inheritdoc}
     */
    public function finalizeScopes(
        array $scopes,
        $grantType,
        ClientEntityInterface $clientEntity,
        $userIdentifier = null
    ) {
        if (count($scopes) === 0) {
            return [];
        }

        if (!in_array($grantType, ['password', 'personal_access', 'client_credentials'])) {
            $scopes = array_filter($scopes, function (ScopeEntityInterface $scopeEntity): bool {
                return trim($scopeEntity->getIdentifier() !== '*');
            });
        }

        $validScopesIdentifiers = ScopesTable::query()
            ->addSelect('ID')
            ->whereIn(
                'ID',
                array_map(function (ScopeEntityInterface $scopeEntity): string {
                    return $scopeEntity->getIdentifier();
                }, $scopes)
            )
            ->fetchCollection()
            ->getIdList();

        return array_filter($scopes, function (ScopeEntityInterface $scopeEntity) use ($validScopesIdentifiers): bool {
            return in_array($scopeEntity->getIdentifier(), $validScopesIdentifiers, true);
        });
    }
}
