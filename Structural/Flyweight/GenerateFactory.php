<?php

namespace Structural\Flyweight;

class GenerateFactory
{
    /**
     * [
     *    'red' => new Ball('red'),
     *    'blue' => new Ball('blue'),
     * ]
     *
     * @var array
     */
    private static $ballMap = [];
    public static function getBall(string $color): Ball
    {
        if (isset(static::$ballMap[$color])) {
            return static::$ballMap[$color];
        } else {
            $ball = new Ball($color);
            static::$ballMap[$color] = $ball;
            return $ball;
        }
    }
}