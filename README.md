# Требования

| PHP       | Bitrix (main) |
|-----------|---------------|
| \>= 7.1.3 | \>= 20.00.00  |

# Установка

Если вы используете Composer не в корне проекта, то необходимо сконфигурировать
директорию для установки модулей.

Например, если файл **composer.json** находится в директории **/local/**:
```json
...
"extra": {
    "bitrix-dir": "../bitrix"
},
...
```

После этого необходимо выполнить команду `composer require yngc0der/bitrix-oauth2-server`,
и выполнить регистрацию модуля в Bitrix через админку.

# Конфигурация

Для начала необходимо сгенерировать публичный и приватный ключи:

```shell
openssl genrsa -out private.key 2048

openssl rsa -in private.key -pubout -out public.key
```

и ключ шифрования:

```php
php -r 'echo base64_encode(random_bytes(32)), PHP_EOL;'
```

Далее в один из файлов конфигурации (`.settings.php`, `.settings_extra.php`) добавьте следующие настройки:

```php
return [
    ...
    'yngc0der.oauth2server' => [
        'value' => [
            'private_key' => '/path/to/private.key',
            'private_key_passphrase' => null,
            'encryption_key' => 'lxZFUEsBCJ2Yb14IF2ygAHI5N4+ZAUXXaSeeJm6+twsUmIen', // ключ шифрования
        ]
    ],
    ...
]
```

В конце скопируйте файл `routes/oauth.php` из модуля в директорию с роутами и добавьте название файла в файл конфигурации:

```php
return [
    ...
    'routing' => [
        'value' => [
            'config' => [
                ...
                'oauth.php',
                ...
            ],
        ],
    ],
    ...
]
```

# Scopes
Для работы со скоупами доступа к API необходимо подписаться на событие `OnScopesLoad`:

```php
use Bitrix\Main;

Main\EventManager::getInstance()->addEventHandler(
    'yngc0der.oauth2server',
    'OnScopesLoad',
    static function (Main\Event $event): Main\EventResult {
        return new Main\EventResult(Main\EventResult::SUCCESS, [
            'read' => 'Read site data',
            'write' => 'Write site data',
        ]);
    }
);
```

# Примеры запросов

## Authorization code grant

> GET https://my.site.com/oauth/authorize?response_type=code&client_id=00112233-4455-6677-8899-aabbccddeeff&redirect_uri=https://client.site.com&scope=read&state=test&code_challenge=WIwW8sZaGckIxtqi_L2h4-Mgk06-X2ffV95NdDo1_bw&code_challenge_method=S256

> POST https://my.site.com/oauth/token
>
> {
>     "grant_type": "authorization_code",
>     "code": "def5020018a310a188e28c17e1437fb8018bba5a32dd8d85ed9af40a761e40820353f21491b7382a2210d517acdf2987f8c01c3c0d8bc1853b26b90b1aa3df93b0d220b27b19b8593b1ae58bd5542ff224211bd729b8d80af4adb2e092e44c44e05d2c2856f062cb52f015583c1260e789e352c4e3f210b3026319cc0f8e46b4e1af1865a6d95b91ab02350d8ee2e416a95ea8b156b77b847a0ee0e4702ebbdec9ad4ce5397c8187be1e2c8c7f413f51f05274558e150c4cd4d9fa5c509a4d37f0c55a7291627ad3979932f0561645c5848a8497c65208563f6d2ef3fd91cad922ab6055998e33669d9874857a2bf64a9d802f0f84949c83dcc9fb20358ba9ca66ee4769c15d479283b75c711f4b26bb86775f5b01f9dc60bed43f8b1ddf4d64a2f371109a258070b68271b91294543f25b64d726c5e515143755bfcf1653e25727675821e7d6f8d250c97c4dad3a0e068bc9a8677dd71d143d682465544af170c44d1bf0ef23ee74b8c696a82516dcfebb30ae1ffd210c2e2acb35fc3a32f3ef7ced4a81431fa58ee774845205a7fdff3f907d7d83b553bd2079598c78ec5cf7af46d51e98589e70b2044868adb",
>     "code_verifier": "jWJS7olsI78LF-hcNHO1QBMqVX06iN5Z837vD6UXO3g",
>     "redirect_uri": "https://client.site.com",
>     "client_id": "00112233-4455-6677-8899-aabbccddeeff"
> }
