<?php

namespace Cblink\Service\ShopDelivery;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read AppConfig\Client $app       应用配置
 * @property-read Common\Client $common       公共配置
 * @property-read DeliveryOrder\Client $delivery_order       配送订单
 * @property-read MeituanDelivery\MeituanDelivery $meituan_delivery       美团配送
 */
class ShopDeliveryApp extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        AppConfig\ServiceProvider::class,
        Common\ServiceProvider::class,
        MeituanDelivery\MeituanServiceProvider::class,
    ];
}