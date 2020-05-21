<?php

namespace Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    protected function processing(RequestInterface $request): ?string
    {
        // 模拟数据返回, 生产状态下是查询数据库的结果.
        return 'Hello World!';
    }
}