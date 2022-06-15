<?php

$tName= "ahmed";
$tPass= "1234";

if($_POST["uname"]==$tName && $_POST["pass"]==$tPass)
    echo "Welcome ".$_POST["uname"];
else
    echo "No user found";
?>