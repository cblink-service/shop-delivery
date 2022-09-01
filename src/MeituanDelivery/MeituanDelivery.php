<?php

namespace Cblink\Service\ShopDelivery\MeituanDelivery;


use Cblink\Service\Foundation\Container;

/**
 *
 *
 * @property-read Shop\Client $shop       门店
 * @property-read Order\Client $order     订单
 */
class MeituanDelivery extends Container
{
    protected array $providers = [
        Order\ServiceProvider::class,
        Shop\ServiceProvider::class,
    ];

}