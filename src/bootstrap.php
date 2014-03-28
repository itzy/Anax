<?php
/**
 * Bootstrapping functions, essential and needed for itzy to work together with some common helpers.
 *
 */


/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
    echo "itzy: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
    $path = ITZY_INSTALL_PATH . "/src/{$class}/{$class}.php";
    if(is_file($path)) {
        include($path);
    }
    else {
        throw new Exception("Classfile '{$class}' does not exists.");
    }
}
spl_autoload_register('myAutoloader');
