<?php

namespace Veljamatic\Travistest\Tests;

use Mockery as m;
use PHPUnit_Framework_TestCase;
use Illuminate\Container\Container;
use Veljamatic\Travistest\Main;

class MainTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->container = new Container;
        $this->main = new Main($this->container);

        $this->main->setDefaultVersion('v1');
    }

    public function tearDown()
    {
        m::close();
    }

    public function testDefaultVersion()
    {
        $this->assertSame('v1', $this->main->getVersion());
    }

    public function testWithVersion()
    {
        $this->assertSame('v2', $this->main->version('v2')->getVersion());
    }
}
