<?php

namespace Cblink\Service\ShopDelivery\Tests;

use Cblink\Service\ShopDelivery\ShopDeliveryApp;
use PHPUnit\Framework\TestCase;

class TestBaseCase extends TestCase
{
    /**
     * @var ShopDeliveryApp
     */
    protected $application;

    protected function setUp(): void
    {
        $config = [
            // 配置信息
            'base_url' => 'http://127.0.0.1:9503',
            'appid' => 1,
            'secret' => 'test',
            'idaas_url' => 'http://127.0.0.1:9503'
        ];

        $this->application = new ShopDeliveryApp($config);
    }

    /**
     * @param $path
     * @return string
     */
    public function basePath($path = '')
    {
        return __DIR__ . '/htdocs/' . $path;
    }

    /**
     * @param $name
     * @param $rebind
     * @return ShopDeliveryApp
     */
    public function rebindAppClient($name, $rebind)
    {
        if (!($rebind instanceof \Closure)) {
            $rebind = function () use ($rebind) {
                return $rebind;
            };
        }

        $this->application->rebind($name, $rebind);

        return $this->application;
    }

    /**
     * @return ShopDeliveryApp
     */
    public function getApp()
    {
        return $this->application;
    }

    protected function tearDown(): void
    {
        \Mockery::close();
    }
}
