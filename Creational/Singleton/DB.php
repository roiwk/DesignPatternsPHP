<?php

namespace Creational\Singleton;

/**
 * DB单例
 * 一个共有方法，三个私有魔术方法，一个私有静态成员变量
 */
final class DB
{
    /**
     * @var DB
     */
    private static $instance = null;

    /**
     * 获取实例， 唯一共有方法
     *
     * @return DB
     */
    public static function getInstance(): DB
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 防止初始化
     */
    private function __construct()
    {

    }

    /**
     * 防止克隆
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * 防止unserialize
     */
    private function __wakeup()
    {

    }
}