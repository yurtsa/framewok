<?php
echo 'it\'s worker';
if (PHP_MAJOR_VERSION < 8) {
    exit('Требуется версия PHP 8');
}


require_once dirname(__DIR__) . '/config/init.php';