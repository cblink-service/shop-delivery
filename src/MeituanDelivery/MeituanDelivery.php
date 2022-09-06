<?php

namespace Cblink\Service\ShopDelivery\MeituanDelivery;


use Cblink\Service\Foundation\Container;
use Cblink\Service\ShopDelivery\Kernel;
/**
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read Shop\Client $shop       门店
 * @property-read Order\Client $order     订单
 */
class MeituanDelivery extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Order\ServiceProvider::class,
        Shop\ServiceProvider::class,
    ];

}