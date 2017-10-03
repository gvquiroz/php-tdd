<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
    }

    public function testThatWeCanGetFirstname()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Gabi');

        $this->assertEquals($user->getFirstName(),'Gabi');

    }
}