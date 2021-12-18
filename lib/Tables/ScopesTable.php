<?php

namespace Yngc0der\OAuth2Server\Tables;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\StringField;

class ScopesTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'yngc0der_oauth2server_scopes';
    }

    public static function getMap(): array
    {
        return [
            (new StringField('ID'))
                ->configurePrimary(true),
        ];
    }
}
