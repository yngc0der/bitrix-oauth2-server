<?php

namespace Yngc0der\OAuth2Server\Tables;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\BooleanField;
use Bitrix\Main\ORM\Fields\DatetimeField;
use Bitrix\Main\ORM\Fields\StringField;

class RefreshTokensTable extends DataManager
{
    public static function getTableName(): string
    {
        return 'yngc0der_oauth2server_refresh_tokens';
    }

    public static function getMap(): array
    {
        return [
            (new StringField('ID'))
                ->configurePrimary(true)
                ->configureSize(80),

            (new DatetimeField('EXPIRE_DATE'))
                ->configureRequired(true),

            (new StringField('ACCESS_TOKEN_ID'))
                ->configureRequired(true)
                ->configureSize(80),

            (new BooleanField('IS_REVOKED'))
                ->configureDefaultValue(false),
        ];
    }
}
