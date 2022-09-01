<?php

namespace Cblink\Service\ShopDelivery\MeituanDelivery;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class MeituanServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['meituan_delivery'] = function(Container $pimple){
            return new MeituanDelivery($pimple->config->toArray());
        };
    }
}