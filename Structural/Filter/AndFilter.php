<?php

namespace Structural\Filter;

class AndFilter implements FilterInterface
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
        foreach ($this->filter as $filter) {
            $persons = $filter->filter($persons);
        }
        return $persons;
    }
}