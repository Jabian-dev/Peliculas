<?php
include '../helpers/utilities.php';
include 'serviceSession.php';

session_start();



$Peliculask = $_SESSION ['Heroes'];

if(isset($_GET['id'])){

    $PeliId = $_GET['id'];

    $ElemenroIndex = getIndexdelete($Peliculask,'id',$PeliId);

    unset($Peliculask[$ElemenroIndex]);

    $_SESSION['Heroes']=$Peliculask;
}
header("Location: ../index.php");
exit();
?>