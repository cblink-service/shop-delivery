<?php

namespace Cblink\Service\ShopDelivery\TestApi;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 模拟门店状态
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function shopStatus(array $query = [])
    {
        return $this->httpPost('/api/test/meituan-delivery/shop-status', $query);
    }

    /**
     * 模拟订单状态
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderStatus(array $query = [])
    {
        return $this->httpPost('/api/test/meituan-delivery/order-status', $query);
    }

}