<?php

namespace Cblink\Service\ShopDelivery\Tests\AppConfig;

use Cblink\Service\ShopDelivery\Tests\TestBaseCase;

class TestAppConfig extends TestBaseCase
{
    public function testAppConfigStore()
    {
        $this->application->app->show();

    }

    public function testAppConfigShow()
    {
        var_dump($this->application->meituan_delivery->order->testApi(['platform' => 1]));
    }
}