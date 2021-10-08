<?php

use PHPUnit\Framework\TestCase;
use App\MyMerge;

class MyMergeTest extends TestCase
{
    /**
     * @var MyMerge object
     */
    protected $merge;

    /**
     * Setup test environment
     */
    protected function setUp(): void
    {
        $this->merge = new MyMerge('input.csv', 'myOutput.csv');
    }

    /**
     * This allows to test private or protected methods
     * @throws ReflectionException
     */
    protected static function getMethod($obj, $name, array $args)
    {
        $class = new ReflectionClass($obj);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method->invokeArgs($obj, $args);
    }


    /**
     * @throws Exception
     */
    public function test_grabApiInfo()
    {
        $myGrabApiInfo = self::getMethod($this->merge, 'grabApiInfo', ['12345']);
        $this->assertTrue(is_string($myGrabApiInfo));
    }
}
