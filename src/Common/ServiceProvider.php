<?php

namespace Cblink\Service\ShopDelivery\Common;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['common'] = function($pimple){
            return new Client($pimple);
        };
    }
}