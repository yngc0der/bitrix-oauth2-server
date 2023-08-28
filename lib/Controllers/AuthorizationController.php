<?php

namespace Yngc0der\OAuth2Server\Controllers;

use Bitrix\Main\Engine\ActionFilter;
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
                'prefilters' => [
                    new ActionFilter\Authentication(true),
                ],
                'postfilters' => [],
            ],
        ];
    }

    public function authorizeAction(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        try {
            $authRequest = $this->server->validateAuthorizationRequest($request);

            $userEntity = new UserEntity();
            $userEntity->setIdentifier((string)$this->getCurrentUser()->getId());

            $authRequest->setUser($userEntity);
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
}
