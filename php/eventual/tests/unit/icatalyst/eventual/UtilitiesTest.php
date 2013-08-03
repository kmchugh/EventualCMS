<?php
/**
 * Created by PhpStorm.
 * User: kmchugh
 * Date: 2/8/13
 * Time: 12:47 PM
 */

namespace icatalyst\eventual;


class UtilitiesTest extends \PHPUnit_Framework_TestCase
{
    public function testLoadClass()
    {
        // Invalid class should return null
        $this->assertNull(Utilities::loadClass('Utilities'));

        // Valid class will return the class path
        $lcReturn = Utilities::loadClass('\icatalyst\eventual\Utilities');
        $this->assertEquals(EVENTUAL_ROOT.'icatalyst'.DIRECTORY_SEPARATOR.'eventual'.DIRECTORY_SEPARATOR.'Utilities.php', $lcReturn);
    }

    public function testPrintVar()
    {
        $this->assertEquals('NULL', Utilities::printVar(NULL, FALSE));

        $laArray = array('test'=>'value', 'test1'=> 'value1');

        $lcResult = str_replace('\n', PHP_EOL, 'Array\n(\n    [test] => value\n    [test1] => value1\n)\n');
        $this->assertEquals($lcResult, Utilities::printVar($laArray, FALSE));

        // TODO: Also need to test the STDOUT
    }

    public function testIsConsole()
    {
        $this->assertTrue(Utilities::isConsole());

        // TODO: Also need to test the web environment
    }


}
