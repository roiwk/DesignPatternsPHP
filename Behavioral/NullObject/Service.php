<?php

namespace Behavioral\NullObject;

class Service
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSth()
    {
        $this->logger->log(__METHOD__ . ' called!');
    }
}