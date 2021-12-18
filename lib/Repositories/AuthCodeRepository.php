<?php

namespace Yngc0der\OAuth2Server\Repositories;

use League\OAuth2\Server\Entities\AuthCodeEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Repositories\AuthCodeRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\AuthCodeEntity;
use Yngc0der\OAuth2Server\Tables\AuthCodesTable;

class AuthCodeRepository implements AuthCodeRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function persistNewAuthCode(AuthCodeEntityInterface $authCodeEntity)
    {
        AuthCodesTable::add([
            'ID' => $authCodeEntity->getIdentifier(),
            'IS_REVOKED' => false,
            'USER_ID' => (int)$authCodeEntity->getUserIdentifier(),
            'CLIENT_ID' => $authCodeEntity->getClient()->getIdentifier(),
            'SCOPES' => array_map(function (ScopeEntityInterface $scopeEntity): string {
                return $scopeEntity->getIdentifier();
            }, $authCodeEntity->getScopes()),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function revokeAuthCode($codeId)
    {
        AuthCodesTable::update($codeId, ['IS_REVOKED' => true]);
    }

    /**
     * {@inheritdoc}
     */
    public function isAuthCodeRevoked($codeId)
    {
        $authCode = AuthCodesTable::query()
            ->addSelect('ID')
            ->addSelect('IS_REVOKED')
            ->where('ID', $codeId)
            ->fetchObject();

        if ($authCode !== null) {
            return $authCode->getIsRevoked();
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getNewAuthCode()
    {
        return new AuthCodeEntity();
    }
}
