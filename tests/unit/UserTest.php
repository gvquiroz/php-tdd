<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
    }
}