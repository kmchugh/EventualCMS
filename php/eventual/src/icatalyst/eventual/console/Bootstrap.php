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
     * Creates a new Bootstrap with the context specified, or the
     * default context if none is supplied.
     * The expectation is that a context only needs to be supplied if
     * somthing odd is happening such as running in a test environment
     *
     * @param Context $toContext the context to use, usually not supplied
     */
    function __construct(Context $toContext = NULL)
    {
        // Set up the correct context
        parent::__construct(is_null($toContext) ? new Context() : $toContext);
    }


    public function run()
    {
        Utilities::printVar($_SERVER['argv']);
        return parent::run();
    }
}

?>