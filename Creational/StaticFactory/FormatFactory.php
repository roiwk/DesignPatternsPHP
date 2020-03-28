<?php

namespace Creational\StaticFactory;

use InvalidArgumentException;

/**
 * 静态，意味着是全局状态，不能被测试用例模拟（mock，即无法new）
 * final，意味着不能派生，也不能有多个不同的实例
 */
final class FormatFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('不存在的格式~');
    }
}