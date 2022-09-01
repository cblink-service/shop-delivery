<?php

namespace Cblink\Service\ShopDelivery\MeituanDelivery\Order;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 校验配送能力
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function check($query = [])
    {
        return $this->httpPost('/api/delivery/meituan/order/check', $query);
    }

    /**
     * 预下单
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function preCreate($query = [])
    {
        return $this->httpPost('/api/delivery/meituan/order/pre-create', $query);
    }

    /**
     * 创建订单
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create($query = [])
    {
        return $this->httpPost('/api/delivery/meituan/order/create', $query);
    }

    /**
     * 骑手定位
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function location($query = [])
    {
        return $this->httpPost('/api/delivery/meituan/order/location', $query);
    }

    /**
     * 取消订单
     *
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancel($query = [])
    {
        return $this->httpPost('/api/delivery/meituan/order/cancel', $query);
    }
}