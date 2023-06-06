<?php
include('layout/constantes.php');
session_start();
session_destroy();
header("Location:".$URL_WEB."login.php");
