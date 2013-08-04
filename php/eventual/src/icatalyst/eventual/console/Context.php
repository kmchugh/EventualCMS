<?php

namespace icatalyst\eventual\console;

/**
 * Class Context the context of the application as it is being executed
 * This is usually one of Test context, Console context, or Web Context
 * @package icatalyst\eventual\console
 */
class Context extends \icatalyst\eventual\applications\Context
{
    /**
     * Creates a new Console Context
     */
    function __construct()
    {
    }
}