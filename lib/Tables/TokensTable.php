<?php

namespace Yngc0der\OAuth2Server\Tables;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\ArrayField;
use Bitrix\Main\ORM\Fields\BooleanField;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;

class TokensTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'yngc0der_oauth2server_tokens';
    }

    public static function getMap(): array
    {
        return [
            (new StringField('ID'))
                ->configurePrimary(true)
                ->configureSize(80),

            (new BooleanField('IS_REVOKED'))
                ->configureDefaultValue(false),

            (new IntegerField('USER_ID'))
                ->configureRequired(true),

            (new StringField('CLIENT_ID'))
                ->configureRequired(true)
                ->configureSize(80),

            (new ArrayField('SCOPES')),
        ];
    }
}
