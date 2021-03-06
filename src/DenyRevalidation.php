<?php

namespace GuzzleHttp\Subscriber\Cache;

use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;

/**
 * Never performs cache revalidation and just assumes the request is invalid
 */
class DenyRevalidation extends DefaultRevalidation
{
    public function __construct() {}

    public function revalidate(RequestInterface $request, ResponseInterface $response)
    {
        return false;
    }
}
