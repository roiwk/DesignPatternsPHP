<?php

namespace Structural\Adapter;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * @return [int currentPage,  int totalPage]
     */
    public function getPage(): array;
}