<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/24/2018
 * Time: 10:36 AM
 */

function redirect($url) {
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();

}
