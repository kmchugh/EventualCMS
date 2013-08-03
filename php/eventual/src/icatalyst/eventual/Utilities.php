<?php
/**
 * Utility class for oft used static functions
 */

namespace icatalyst\eventual;

class Utilities
{
    /**
     * Loads the specified class files using include_once.
     * The order of loading will be
     * - EVENTUAL_ROOT + namespace if a namespace is given
     * - namespace if one is given
     * - paths from the php include_path in order
     *
     * This load function is PSR-0 compliant
     *
     * @param $tcClass string class name to load, if fully qualified this will respect the namespace
     * @return null|string returns the name of the class file used, or NULL if no class was loaded
     */
    static public function loadClass($tcClass)
    {
        // Extract the namespace and class name
        $laClass = explode('\\', $tcClass);
        $lcClassName = str_replace('\\', DIRECTORY_SEPARATOR, $laClass[count($laClass)-1]);
        $lcNameSpace = count($laClass) == 1 ? NULL : implode(DIRECTORY_SEPARATOR, array_slice($laClass, 0, count($laClass)-1));

        // Include the include_path for autoloading
        $lcIncludePath = (!is_null($lcNameSpace) ? str_replace(DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, EVENTUAL_ROOT.$lcNameSpace).PATH_SEPARATOR.$lcNameSpace.PATH_SEPARATOR : '').ini_get('include_path');
        foreach (explode(PATH_SEPARATOR, $lcIncludePath) as $lcPath)
        {
            $lcClassFile = $lcPath.DIRECTORY_SEPARATOR.$lcClassName.'.php';
            if (is_readable($lcClassFile))
            {
                include_once($lcClassFile);
                return $lcClassFile;
            }
        }
        return NULL;
    }

    /**
     * Gets a string representation of the variable specified, and outputs it in the appropriate
     * format if $tlOutput is true
     * @param $toVariable mixed the variable to parse
     * @param bool $tlOutput true to output the variable, false to return the value
     * @return string the string representation of the variable
     */
    public static function printVar($toVariable, $tlOutput = TRUE)
    {
        $llConsole = Utilities::isConsole();
        $llCancelWrap = !$tlOutput || $llConsole;
        $lcReturn = (!$llCancelWrap ? ($llConsole ? '' : '<pre>') : '').
            ((is_null($toVariable) || !isset($toVariable)) ? 'NULL' : print_r($toVariable, 1)).
            (!$llCancelWrap ? ($llConsole ? PHP_EOL : '</pre>') : '');

        if ($tlOutput)
        {
            echo $lcReturn;
        }
        return $lcReturn;
    }

    /**
     * Checks if we are running in console mode or web mode
     * @return bool true if in console mode, false otherwise
     */
    public static function isConsole()
    {
        return TRUE;
    }
}