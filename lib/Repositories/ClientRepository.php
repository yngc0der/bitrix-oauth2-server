<?php

namespace Yngc0der\OAuth2Server\Repositories;

use Bitrix\Main\Security\Password;
use League\OAuth2\Server\Repositories\ClientRepositoryInterface;
use Yngc0der\OAuth2Server\Entity\ClientEntity;
use Yngc0der\OAuth2Server\Tables\ClientsTable;

class ClientRepository implements ClientRepositoryInterface
{
    public function getClientEntity($clientIdentifier): ?ClientEntity
    {
        $client = ClientsTable::query()
            ->addSelect('*')
            ->where('ID', $clientIdentifier)
            ->fetchObject();

        if ($client === null) {
            return null;
        }

        $clientEntity = new ClientEntity();

        $clientEntity->setIdentifier($client->getId());
        $clientEntity->setName($client->getName());
        $clientEntity->setRedirectUri($client->getRedirectUri());
        if ($client->getIsConfidential()) {
            $clientEntity->setConfidential();
        }

        return $clientEntity;
    }

    public function validateClient($clientIdentifier, $clientSecret, $grantType): bool
    {
        $client = ClientsTable::query()
            ->enablePrivateFields()
            ->addSelect('*')
            ->addSelect('SECRET')
            ->where('ID', $clientIdentifier)
            ->fetchObject();

        if ($client === null) {
            return false;
        }

        if ($client->getIsConfidential() && !Password::equals($client->getSecret(), $clientSecret)) {
            return false;
        }

        return true;
    }
}
