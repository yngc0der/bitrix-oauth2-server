<?php

namespace Yngc0der\OAuth2Server\Controllers;

use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AccessTokensController extends BaseOauth2Controller
{
    public function configureActions(): array
    {
        return [
            'issueToken' => [
                'prefilters' => [],
                'postfilters' => [],
            ],
        ];
    }

    public function issueTokenAction(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        try {
            return $this->server->respondToAccessTokenRequest($request, $response);
        } catch (OAuthServerException $exception) {
            return $exception->generateHttpResponse($response);
        } catch (\Exception $exception) {
            return $response
                ->withStatus(500)
                ->withBody(\GuzzleHttp\Psr7\Utils::streamFor($exception->getMessage()));
        }
    }
}
