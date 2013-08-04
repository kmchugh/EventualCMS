<?php
/**
 * Created by PhpStorm.
 * User: kmchugh
 * Date: 4/8/13
 * Time: 5:06 PM
 */

namespace icatalyst\eventual;

class TestObject extends Object
{
    function __construct()
    {
        parent::__construct();
    }
}

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $loObject = new TestObject();
        $this->assertNotNull($loObject);
    }
}

