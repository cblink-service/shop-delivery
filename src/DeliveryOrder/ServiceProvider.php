<?php

namespace Cblink\Service\ShopDelivery\DeliveryOrder;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['delivery_order'] = function($pimple){
            return new Client($pimple);
        };
    }
}