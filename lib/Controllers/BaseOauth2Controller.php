<?php

namespace Yngc0der\OAuth2Server\Controllers;

use Bitrix\Main\Engine\Action;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\HttpResponse;
use Bitrix\Main\HttpRequest;
use Bitrix\Main\Web\HttpHeaders;
use League\OAuth2\Server\AuthorizationServer;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

abstract class BaseOauth2Controller extends Controller
{
    /** @var AuthorizationServer */
    protected $server;

    /** @var ContainerInterface */
    protected $container;

    public function __construct(HttpRequest $request = null)
    {
        parent::__construct($request);
        $this->container = \Bitrix\Main\DI\ServiceLocator::getInstance();
        $this->server = $this->container->get('yngc0der.oauth2server.authorization_server');
    }

    protected function processBeforeAction(Action $action): bool
    {
        $action->setArguments([
            'request' => $this->createPsrServerRequest(
                $action->getController()->getRequest()
            ),
            'response' => $this->createPsrResponse(
                (new HttpResponse())->setStatus(200)
            ),
        ]);
        return true;
    }

    protected function processAfterAction(Action $action, $result): HttpResponse
    {
        if (!$result instanceof ResponseInterface) {
            throw new \RuntimeException(
                'Action result must be instance of "Psr\Http\Message\ResponseInterface"'
            );
        }
        return $this->createHttpResponse($result);
    }

    private function createHttpResponse(ResponseInterface $response): HttpResponse
    {
        $headers = new HttpHeaders();
        foreach ($response->getHeaders() as $name => $values) {
            foreach ($values as $value) {
                $headers->add($name, $value);
            }
        }

        return (new HttpResponse())
            ->setStatus($response->getStatusCode())
            ->setHeaders($headers)
            ->setContent((string)$response->getBody());
    }

    private function createPsrServerRequest(HttpRequest $request): ServerRequestInterface
    {
        $serverRequest = new \GuzzleHttp\Psr7\ServerRequest(
            $request->getRequestMethod(),
            $request->getRequestUri(),
            $this->collectHttpHeaders($request->getHeaders()),
            HttpRequest::getInput(),
            $this->parseHttpProtocolVersion($request->getServer()->get('SERVER_PROTOCOL')),
            $request->getServer()->toArray()
        );

        return $serverRequest
            ->withCookieParams($request->getCookieList()->getValues())
            ->withQueryParams($request->getQueryList()->getValues())
            ->withParsedBody($request->getPostList()->getValues())
            ->withUploadedFiles(\GuzzleHttp\Psr7\ServerRequest::normalizeFiles(
                $request->getFileList()->getValues()
            ));
    }

    private function createPsrResponse(HttpResponse $response): ResponseInterface
    {
        $serverProtocol = \Bitrix\Main\Context::getCurrent()->getServer()->get('SERVER_PROTOCOL');

        $statusCode = 200;
        $prefixStatus = strtolower($serverProtocol . ' ');
        $prefixStatusLength = strlen($prefixStatus);
        if ($response->getStatus() !== null) {
            $statusCode = (int)substr($response->getStatus(), $prefixStatusLength);
        }

        return new \GuzzleHttp\Psr7\Response(
            $statusCode,
            array_filter(
                $this->collectHttpHeaders($response->getHeaders()),
                function (string $name) use ($response): bool {
                    return $response->getStatus() === null || $name !== $response->getStatus();
                },
                ARRAY_FILTER_USE_KEY
            ),
            $response->getContent(),
            $this->parseHttpProtocolVersion($serverProtocol)
        );
    }

    private function collectHttpHeaders(HttpHeaders $headers): array
    {
        $list = [];

        /** @var array{name: string, values: string[]} $header */
        foreach ($headers->toArray() as $header) {
            $list[$header['name']] = $header['values'];
        }

        return $list;
    }

    private function parseHttpProtocolVersion(?string $serverProtocol): string
    {
        return $serverProtocol !== null
            ? str_replace('HTTP/', '', $serverProtocol)
            : '1.0';
    }
}
