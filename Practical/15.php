<?php
$name = $_POST['n'];
$pass = $_POST['p'];
$gender = "";


if(empty($name) || empty($pass) || empty($_POST['g']))
{
    echo "Please Enter all the Details....<br>" ;
}
else
{

    if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z0-9]*$/", $pass)) {
        echo "Inavlid Formate...<br>";
    } else {
        $len1 = strlen($name);
        $len2 = strlen($pass);
        if ($len1 < 3 || $len2<8) {
            echo "Invalid Formate...<br>";
        } else {
            echo $name."<br>";
            echo $pass."<br>";
            $gender = $_POST['g'];
            echo $gender;
        }
    }
}

?>