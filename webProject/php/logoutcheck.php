<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/25/2018
 * Time: 12:00 PM
 */

include "DBConnection.php";
include "functions.php";

session_start();

if(isSet($_SESSION['user'])){
    session_unset();
    session_destroy();
    echo '<script> window.location="../Main0.php" </script>' ;

}
else{
    echo '<script> window.location="../Main0.php" </script>' ;

}