<?php

namespace Yngc0der\OAuth2Server\Repositories;

use Bitrix\Main\Type\DateTime;
use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\RefreshTokenEntity;
use Yngc0der\OAuth2Server\Tables\RefreshTokensTable;

class RefreshTokenRepository implements RefreshTokenRepositoryInterface
{
    public function persistNewRefreshToken(RefreshTokenEntityInterface $refreshTokenEntity): void
    {
        RefreshTokensTable::add([
            'ID' => $refreshTokenEntity->getIdentifier(),
            'ACCESS_TOKEN_ID' => $refreshTokenEntity->getAccessToken()->getIdentifier(),
            'IS_REVOKED' => false,
            'EXPIRE_DATE' => DateTime::createFromTimestamp($refreshTokenEntity->getExpiryDateTime()->getTimestamp()),
        ]);
    }

    public function revokeRefreshToken($tokenId): void
    {
        RefreshTokensTable::update($tokenId, ['IS_REVOKED' => true]);
    }

    public function isRefreshTokenRevoked($tokenId): bool
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

    public function getNewRefreshToken(): RefreshTokenEntity
    {
        return new RefreshTokenEntity();
    }
}
