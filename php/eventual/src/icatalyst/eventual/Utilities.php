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
}