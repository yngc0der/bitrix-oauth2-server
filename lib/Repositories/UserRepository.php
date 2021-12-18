<?php

namespace Yngc0der\OAuth2Server\Repositories;

use Bitrix\Main\Security\Password;
use Bitrix\Main\UserTable;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Repositories\UserRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\UserEntity;

class UserRepository implements UserRepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function getUserEntityByUserCredentials(
        $username,
        $password,
        $grantType,
        ClientEntityInterface $clientEntity
    ) {
        $user = UserTable::query()
            ->enablePrivateFields()
            ->addSelect('ID')
            ->addSelect('PASSWORD')
            ->where('ACTIVE', true)
            ->where('BLOCKED', false)
            ->where('LOGIN', $username)
            ->fetchObject();

        if ($user === null) {
            return null;
        }

        if (!Password::equals($user->getPassword(), $password)) {
            return null;
        }

        $userEntity = new UserEntity();
        $userEntity->setIdentifier((string)$user->getId());

        return $userEntity;
    }
}
