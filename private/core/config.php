<?php

define("ROOT","http://localhost/theweb/public");
define("ASSETS","http://localhost/theweb/public/assets");

if($_SERVER['SERVER_NAME'] == "localhost"){
    define("DBNAME","thewebdb");
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASSWORD","");
    define("DBDRIVER","mysql");
}
else{
    define("DBNAME","id20404083_thewebdb");
    define("DBHOST","localhost");
    define("DBUSER","id20404083_root");
    define("DBPASSWORD","GwWIfB=jlq-IS1u4");
    define("DBDRIVER","mysql");
}



?>