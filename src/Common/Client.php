<?php

namespace Cblink\Service\ShopDelivery\Common;

use Cblink\Service\ShopDelivery\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 公共参数门店类目
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCategory(array $query = [])
    {
        return $this->httpGet('/api/common/delivery/category', $query);
    }

    /**
     * 美团配送服务包
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMeituanDeliveryServiceCode(array $query = [])
    {
        return $this->httpGet('/api/common/delivery/meituan/service-code', $query);
    }

}