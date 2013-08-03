<?php

namespace icatalyst\eventual\console;
use icatalyst\eventual\Utilities;

/**
 * Class Bootstrap is a bootstrap specifically for console applications, this includes command line execution
 * as well as automated execution such as through cron
 */
class Bootstrap extends \icatalyst\eventual\Bootstrap
{
    public function run()
    {
        Utilities::printVar($_SERVER['argv']);
        return parent::run();
    }
}

?>