<?php 

include('layout/constantes.php');
session_start();
if(!isset( $_SESSION['SESSION_USER_TOKEN'])){
    header("Location:".$URL_WEB."login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('layout/constantes.php');  ?>
<?php include('layout/head.php'); ?>


<body class="animsition">
    <div class="onload d-none" id="onload">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include('layout/headerMobile.php'); ?>

        <!-- MENU SIDEBAR-->
        <?php include('layout/menuSidebar.php'); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include('layout/headerDesktop.php'); ?>
