<?php

namespace Cblink\Service\ShopDelivery\AppConfig;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['app'] = function($pimple){
            return new Client($pimple);
        };
    }
}