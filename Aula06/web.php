<?php

echo "<pre>";

//header('location: http://www.4linux.com.br');

//header("content_type: application/pdf");

//print_r($_SERVER);

//print_r($_ENV);

//print_r($_GET);

//print_r($_POST);

session_start();

$_SESSION["MeuCarro"] = "Golf";

echo $_SESSION["MeuCarro"];