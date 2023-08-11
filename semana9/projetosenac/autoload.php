
<?php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '\/class/' . $className . '.class.php'; // Substitua pelo caminho real das suas classes
    if (file_exists("{$classFile}")) {
        require_once $classFile;
    }
});


