<?php

namespace Creational\Prototype;

abstract class BookPrototype
{
    /**
     * 标题
     *
     * @var string
     */
    protected $title;

    /**
     * 类型
     *
     * @var string
     */
    protected $category;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}