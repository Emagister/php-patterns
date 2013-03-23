<?php
namespace Patterns\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testDifferentCallsToGetInstanceReturnTheSameObject()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        $this->assertSame($a, $b, 'Objects should be the same');
    }

    public function testCloneAnObjectAndThrowAnException()
    {
        $this->setExpectedException('\Exception');
        $a = Singleton::getInstance();
        $b = clone $a;
    }
}
