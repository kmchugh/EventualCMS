<?php
namespace icatalyst;

class Run
{
    public function autoload ($tcClass)
    {
        $laClass = str_split($tcClass, substr_count('\\', $tcClass));

        $laFiles = array(
            $class . '.php',
            str_replace('_', '/', $class) . '.php',
        );
        /*
                echo "\n";
                echo ini_get('include_path');
                echo "\n";

                foreach (explode(PATH_SEPARATOR, ini_get('include_path')) as $base_path)
                {
                    foreach ($laFiles as $file)
                    {
                        $path = "$base_path/$file";
                        echo "\n";
                        echo $path;
                        echo "\n";
                        if (file_exists($path) && is_readable($path))
                        {
                            include_once $path;
                            return;
                        }
                    }
                }
                */
        echo 'eventual'.DIRECTORY_SEPARATOR.'console'.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        echo "\n";
        include_once 'eventual'.DIRECTORY_SEPARATOR.'console'.DIRECTORY_SEPARATOR.str_replace('eventual'.DIRECTORY_SEPARATOR.'console'.DIRECTORY_SEPARATOR.'\\', DIRECTORY_SEPARATOR, $class) . '.php';
    }


}

?>