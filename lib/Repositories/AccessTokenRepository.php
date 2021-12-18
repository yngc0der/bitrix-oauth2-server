<?php

namespace Yngc0der\OAuth2Server\Repositories;

use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\AccessTokenEntity;
use Yngc0der\OAuth2Server\Tables\TokensTable;

class AccessTokenRepository implements AccessTokenRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function persistNewAccessToken(AccessTokenEntityInterface $accessTokenEntity)
    {
        TokensTable::add([
            'ID' => $accessTokenEntity->getIdentifier(),
            'IS_REVOKED' => false,
            'USER_ID' => (int)$accessTokenEntity->getUserIdentifier(),
            'CLIENT_ID' => $accessTokenEntity->getClient()->getIdentifier(),
            'SCOPES' => array_map(function (ScopeEntityInterface $scopeEntity): string {
                return $scopeEntity->getIdentifier();
            }, $accessTokenEntity->getScopes()),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function revokeAccessToken($tokenId)
    {
        TokensTable::update($tokenId, ['IS_REVOKED' => true]);
    }

    /**
     * {@inheritdoc}
     */
    public function isAccessTokenRevoked($tokenId)
    {
        $token = TokensTable::query()
            ->addSelect('ID')
            ->addSelect('IS_REVOKED')
            ->where('ID', $tokenId)
            ->fetchObject();

        if ($token !== null) {
            return $token->getIsRevoked();
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewToken(ClientEntityInterface $clientEntity, array $scopes, $userIdentifier = null)
    {
        $accessToken = new AccessTokenEntity();
        $accessToken->setClient($clientEntity);
        foreach ($scopes as $scope) {
            $accessToken->addScope($scope);
        }
        $accessToken->setUserIdentifier($userIdentifier);

        return $accessToken;
    }
}
