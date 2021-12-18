<?php

namespace Yngc0der\OAuth2Server\Repositories;

use Bitrix\Main\Type\DateTime;
use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\RefreshTokenEntity;
use Yngc0der\OAuth2Server\Tables\RefreshTokensTable;

class RefreshTokenRepository implements RefreshTokenRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function persistNewRefreshToken(RefreshTokenEntityInterface $refreshTokenEntity)
    {
        RefreshTokensTable::add([
            'ID' => $refreshTokenEntity->getIdentifier(),
            'ACCESS_TOKEN_ID' => $refreshTokenEntity->getAccessToken()->getIdentifier(),
            'IS_REVOKED' => false,
            'EXPIRE_DATE' => DateTime::createFromTimestamp($refreshTokenEntity->getExpiryDateTime()->getTimestamp()),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function revokeRefreshToken($tokenId)
    {
        RefreshTokensTable::update($tokenId, ['IS_REVOKED' => true]);
    }

    /**
     * {@inheritdoc}
     */
    public function isRefreshTokenRevoked($tokenId)
    {
        $refreshToken = RefreshTokensTable::query()
            ->addSelect('ID')
            ->addSelect('IS_REVOKED')
            ->where('ID', $tokenId)
            ->fetchObject();

        if ($refreshToken !== null) {
            return $refreshToken->getIsRevoked();
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewRefreshToken()
    {
        return new RefreshTokenEntity();
    }
}
