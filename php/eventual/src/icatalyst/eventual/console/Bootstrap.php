<?php

namespace icatalyst\eventual\console;
use icatalyst\eventual\Utilities;

/**
 * Class Bootstrap is a bootstrap specifically for console applications, this includes command line execution
 * as well as automated execution such as through cron
 * @package icatalyst\eventual\console
 */
class Bootstrap extends \icatalyst\eventual\applications\Bootstrap
{
    /**
     * Creates a new instance of the Console Bootstrap
     */
    function __construct()
    {
        // Set up the correct context
        parent::__construct(new Context());
    }


    public function run()
    {
        Utilities::printVar($_SERVER['argv']);
        return parent::run();
    }
}

?>