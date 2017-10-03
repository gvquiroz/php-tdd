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

    public function testEmailAddressCanBeSet()
    {
        $user = new \App\Models\User;
        
        $user->setEmail('gvquiroz@gmail.com');
        
        $this->assertEquals($user->getEmail(),'gvquiroz@gmail.com');
    }
}