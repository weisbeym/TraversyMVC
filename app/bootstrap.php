<?php

//load config
require_once 'config/config.php';

//auto load core libraries
spl_autoload_register(function($className) {
    require_once 'libraries/'.$className.'.php';
});