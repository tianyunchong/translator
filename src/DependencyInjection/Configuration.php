<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 2019/10/12
 * Time: 09:04
 */

namespace Van\Translation\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    private $debug;

    /**
     * @param bool $debug Whether debugging is enabled or not
     */
    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }

    /**
     * 构造配置结构树
     */
    public function getConfigTreeBuilder()
    {
    }
}
