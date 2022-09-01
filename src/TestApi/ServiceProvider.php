<?php

namespace Cblink\Service\ShopDelivery\TestApi;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['test'] = function($pimple){
            return new Client($pimple);
        };
    }
}