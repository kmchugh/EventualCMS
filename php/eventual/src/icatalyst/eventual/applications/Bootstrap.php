<?php
/**
 * Bootstrap is the common bootstrap startup for both web and console applications
 */

namespace icatalyst\eventual\applications;


use icatalyst\eventual\applications\Context;

abstract class Bootstrap
{
    public $context = null;

    /**
     * Creates a new instance of the bootstrap
     * @param Context $toContext the context that we are executing in
     */
    function __construct(Context $toContext)
    {
        $this->context = $toContext;

        // Gather the configuration and create the application
        App::create($this->getConfig());
    }

    /**
     * Gets the full configuration array for the application
     * based on the context and parameters
     */
    private function getConfig()
    {
        return array();
    }

    /**
     * Kicks off the application and returns the app result code, 0 if Okay, otherwise an error code
     * @return int the error code of the execution attempt
     */
    public function run()
    {
        return App::run();
    }
}

?>