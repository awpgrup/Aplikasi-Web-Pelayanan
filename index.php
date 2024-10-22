<?php
define("HOST", "apps.iwanrj.com/api");
define("TYPE", "json");
define("SYSTEM", "app_connected");
define("METHOD", "POST");
$version = file_gets_content(HOST.'/v/latest.txt');
// Call and execute the json
