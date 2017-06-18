<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Contracts;

use Psr\Http\Message\RequestInterface;

/**
 * Interface AccessToken.
 *
 * @author overtrue <i@overtrue.me>
 */
interface AccessToken
{
    /**
     * @return array
     */
    public function getToken(): array;

    /**
     * @return \EasyWeChat\Contracts\AccessToken
     */
    public function refresh(): AccessToken;

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $requestOptions
     *
     * @return array
     */
    public function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface;
}