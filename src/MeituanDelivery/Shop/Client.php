<?php

namespace Cblink\Service\ShopDelivery\MeituanDelivery\Shop;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 美团配送门店列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list(array $query = [])
    {
        return $this->httpGet('/api/delivery/meituan/shop', $query);
    }

    /**
     * 美团配送门店详情
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(array $query = [])
    {
        return $this->httpGet('/api/delivery/meituan/shop/show', $query);
    }

    /**
     * 美团配送门店保存
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(array $query = [])
    {
        return $this->httpPost('/api/delivery/meituan/shop/store', $query);
    }

    /**
     * 美团配送门店编辑
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $query = [])
    {
        return $this->httpPut('/api/delivery/meituan/shop/update', $query);
    }

    /**
     * 美团配送门店绑定
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function bind(array $query = [])
    {
        return $this->httpPost('/api/delivery/meituan/shop/bind', $query);
    }

}