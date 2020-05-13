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
            $result = array_merge($result, $filter->filter($persons));
        }
        return array_unique($result, SORT_REGULAR);
    }
}