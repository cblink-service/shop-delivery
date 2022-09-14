<?php

namespace Cblink\Service\ShopDelivery\Shop;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 门店状态
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $query = [])
    {
        return $this->httpPost('/api/shop', $query);
    }

    /**
     * 门店编辑
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $query = [])
    {
        return $this->httpPut('/api/shop/update', $query);
    }

}