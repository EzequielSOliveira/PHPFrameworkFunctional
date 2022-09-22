<?php

set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) {
    throw new \Exception($errstr, $errno, $errfile, $errline);
});

set_exception_handler(function ($exception) {
    var_dump($exception);
});
