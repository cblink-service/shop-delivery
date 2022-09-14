<?php

namespace Cblink\Service\ShopDelivery\Shop;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['shop'] = function($pimple){
            return new Client($pimple);
        };
    }
}