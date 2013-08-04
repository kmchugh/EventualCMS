<?php
/**
 * Created by PhpStorm.
 * User: kmchugh
 * Date: 4/8/13
 * Time: 4:52 PM
 */

namespace icatalyst\eventual\web;


class BootstrapTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $loBootstrap = new Bootstrap();
        $this->assertEquals('icatalyst\eventual\web\Context', get_class($loBootstrap->context));
    }

    public function testRun()
    {
        $loBootstrap = new Bootstrap();
        $this->assertEquals(0, $loBootstrap->run());

        // TODO: Test that an app is actually created
    }
}
