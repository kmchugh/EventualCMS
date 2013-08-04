<?php
namespace icatalyst\eventual\applications;

use icatalyst\eventual\Object;

/**
 * Class App the actual application
 * @package icatalyst\eventual\applications
 */
class App extends Object
{
    /**
     * Creates the global application singleton
     * @param array $toConfig the configuration for the application
     */
    static public function create(Array $toConfig)
    {

    }

    /**
     * Executes the application and returns the error code on completion
     * @return int the error code of the application
     */
    static public function run()
    {
        return 0;
    }

}