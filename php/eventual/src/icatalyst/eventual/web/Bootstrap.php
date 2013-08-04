<?php

/**
 * Class Bootstrap is a bootstrap specific to web applications
 */

namespace icatalyst\eventual\web;

use icatalyst\eventual\Utilities;

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