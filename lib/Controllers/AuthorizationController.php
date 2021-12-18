<?php

namespace Yngc0der\OAuth2Server\Controllers;

use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yngc0der\OAuth2Server\Entity\UserEntity;

class AuthorizationController extends BaseOauth2Controller
{
    public function configureActions(): array
    {
        return [
            'authorize' => [
                'prefilters' => [],
                'postfilters' => [],
            ],
            'token' => [
                'prefilters' => [],
                'postfilters' => [],
            ],
        ];
    }

    public function authorizeAction(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        try {
            $authRequest = $this->server->validateAuthorizationRequest($request);
            $authRequest->setUser(new UserEntity());
            $authRequest->setAuthorizationApproved(true);

            return $this->server->completeAuthorizationRequest($authRequest, $response);
        } catch (OAuthServerException $exception) {
            return $exception->generateHttpResponse($response);
        } catch (\Exception $exception) {
            return $response
                ->withStatus(500)
                ->withBody(\GuzzleHttp\Psr7\Utils::streamFor($exception->getMessage()));
        }
    }

    public function tokenAction(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
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
