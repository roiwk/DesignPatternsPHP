<?php

namespace Structural\Filter;

class OrFilter implements FilterInterface
{
    /**
     * 过滤条件对象数组
     *
     * @var array
     */
    private $filter;

    public function __construct(FilterInterface ...$filter)
    {
        $this->filter = $filter;
    }

    public function filter(array $persons): array
    {
        $result = [];
        foreach ($this->filter as $filter) {
            $result += $filter->filter($persons);
        }
        return $result;
    }
}