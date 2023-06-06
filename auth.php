<?php
include('layout/constantes.php');
if(isset($_GET['access_token'])){
    $UserID = $_GET['UserID'];


    //Consumimos API directamente desde PHP
    $url = $URL_API."getUserWithID";
    $curl = curl_init();
    $fields = array(
        'UserID' => $UserID,
    );
    $fields_string = http_build_query($fields);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
    $res = curl_exec($curl);
    $res = json_decode($res,true);
    echo var_dump($res["user"]["id"]);

    //Iniciamos la Session y Creamos la variable de session
    session_start();
    $_SESSION["SESSION_USER_TOKEN"]= $_GET['access_token'];
    $_SESSION["SESSION_USER_ID"]= $res["user"]["id"];
    $_SESSION["SESSION_USER_NAME"]= $res["user"]["name"];
    $_SESSION["SESSION_USER_EMAIL"]= $res["user"]["email"];

    header("Location:".$URL_WEB."index.php");

}



?>