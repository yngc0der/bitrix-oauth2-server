<?php

namespace Yngc0der\OAuth2Server\Tables;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\BooleanField;
use Bitrix\Main\ORM\Fields\StringField;

class ClientsTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'yngc0der_oauth2server_clients';
    }

    public static function getMap(): array
    {
        return [
            (new StringField('ID'))
                ->configurePrimary(true)
                ->configureSize(80),

            (new StringField('NAME'))
                ->configureSize(100),

            (new BooleanField('IS_CONFIDENTIAL')),

            (new StringField('REDIRECT_URI'))
                ->configureRequired(true)
                ->configureSize(255),

            (new StringField('SECRET'))
                ->configureSize(255)
                ->configurePrivate(true),
        ];
    }
}
