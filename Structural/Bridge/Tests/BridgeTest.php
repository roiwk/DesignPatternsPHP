<?php

namespace Structural\Bridge\Tests;

use Structural\Bridge\ImageStorageService;
use Structural\Bridge\VideoStorageService;
use Structural\Bridge\DiskStorage;
use Structural\Bridge\CloudStorage;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testStoreImage()
    {
        $imgService = new ImageStorageService(new DiskStorage());
        $this->assertSame('disk:test.jpg', $imgService->save('test.jpg'));
    }

    public function testStoreVideo()
    {
        $videoService = new VideoStorageService(new CloudStorage());
        $this->assertSame('cloud:test.mp4', $videoService->save('test.mp4'));
    }
}