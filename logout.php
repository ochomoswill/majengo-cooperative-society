<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 4/29/2016
 * Time: 2:50 PM
 */
include "database.php";

session_start();

if(session_destroy())
{
    header("Location:login.php");
}