<?php

namespace Hillel\Str\Tests;

use Hillel\Str\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testAfter()
    {
        $this->assertEquals('This is my name', Str::after('This is my name', 'something'));
        $this->assertEquals(' my name', Str::after('This is my name', 'This is'));
    }
}
