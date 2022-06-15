<?php

    if ($_POST["uname"] == "")
    {
        echo "Welcome ".$_POST["uname"]." "."You successfully complete your registration. Show your information bellow: "."<br>"."<br>";
        echo "My username is: ".$_POST["uname"]."<br>";
        echo "<span style='color:red;'>Required</span>";
        echo "My password is: ".$_POST["pass"]."<br>";
        echo "Gender: ".$_POST["gender"]."<br>";
        echo "Type: ";
        foreach($_POST["type"] as $b)
            echo $b." , ";
    }

    else if ($_POST["pass"] == "")
    echo "Welcome ".$_POST["uname"]." "."You successfully complete your registration. Show your information bellow: "."<br>"."<br>";
        echo "My username is: ".$_POST["uname"]."<br>";
        echo "My password is: ".$_POST["pass"]."<br>";
        echo "<span style='color:red;'>Required</span>";
        echo "Gender: ".$_POST["gender"]."<br>";
        echo "Type: ";
        foreach($_POST["type"] as $b)
            echo $b." , ";
    else{


        echo "Welcome ".$_POST["uname"]." "."You successfully complete your registration. Show your information bellow: "."<br>"."<br>";
        echo "My username is: ".$_POST["uname"]."<br>";
        echo "My password is: ".$_POST["pass"]."<br>";
        echo "Gender: ".$_POST["gender"]."<br>";
        echo "Type: ";
        foreach($_POST["type"] as $b)
            echo $b." , ";
    }
