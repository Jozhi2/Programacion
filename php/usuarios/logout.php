<?php
session_start();
if(session_destroy())
{
header("Location: /../Programacion/html/index.php");
}
?>