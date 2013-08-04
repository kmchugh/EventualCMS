<?php
/**
 * Created by PhpStorm.
 * User: kmchugh
 * Date: 4/8/13
 * Time: 4:46 PM
 */

namespace icatalyst\eventual\console;


class BootstrapTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $loBootstrap = new Bootstrap();
        $this->assertEquals('icatalyst\eventual\console\Context', get_class($loBootstrap->context));
    }

    public function testRun()
    {
        $loBootstrap = new Bootstrap();
        $this->assertEquals(0, $loBootstrap->run());

        // TODO: Test that an app is actually created
    }


}
