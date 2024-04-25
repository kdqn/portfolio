<?php

$config = parse_ini_file('config.ini', true);
define('URL_ROOT', $config['DEVELOPMENT']['root']);
// define other constants as needed
