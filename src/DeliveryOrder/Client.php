<?php

namespace Cblink\Service\ShopDelivery\DeliveryOrder;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 配送单列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list(array $query = [])
    {
        return $this->httpGet('/api/delivery/order', $query);
    }

    /**
     * 配送单详情
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(array $query = [])
    {
        return $this->httpGet('/api/delivery/order/show', $query);
    }

}