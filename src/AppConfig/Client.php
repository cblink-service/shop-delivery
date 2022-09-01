<?php

namespace Cblink\Service\ShopDelivery\AppConfig;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 配送详情
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(array $query = [])
    {
        return $this->httpGet('/api/config/show', $query);
    }

    /**
     * 应用配置保存
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(array $query = [])
    {
        return $this->httpPost('/api/config/store', $query);
    }

}