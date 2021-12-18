<?php

namespace Yngc0der\OAuth2Server\Tables;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Query\Join;

class AuthCodesScopesTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'yngc0der_oauth2server_auth_codes_scopes';
    }

    public static function getMap(): array
    {
        return [
            (new StringField('AUTH_CODE_ID'))
                ->configurePrimary(true)
                ->configureSize(80),

            (new Reference(
                'AUTH_CODE',
                AuthCodesTable::class,
                Join::on('this.AUTH_CODE_ID', 'ref.ID')
            )),

            (new StringField('SCOPE_ID'))
                ->configurePrimary(true),

            (new Reference(
                'SCOPE',
                ScopesTable::class,
                Join::on('this.SCOPE_ID', 'ref.ID')
            )),
        ];
    }
}
