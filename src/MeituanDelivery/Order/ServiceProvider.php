<?php

namespace Cblink\Service\ShopDelivery\MeituanDelivery\Order;

use Cblink\Service\ShopDelivery\MeituanDelivery\MeituanServiceProvider;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['order'] = function($pimple){
            return new Client($pimple);
        };
    }
}