<?php
session_start();
if(isset($HTTP_SESSION_VARS["session_status"]))
{
    echo ("<pre>");
    echo ("User Name : <b?> " .$HTTP_SESSION_VARS["session user"] . "</b><br>");
    echo ("Password : <b?> " .$HTTP_SESSION_VARS["session password"] . "</b><br>");
    echo ("Click <a href=\"loggout.php\">LoGGOUT</a> untuk keluar !");
}else
{
    header("Location: loggin.php");
    exit;
}
?>