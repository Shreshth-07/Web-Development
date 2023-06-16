<?php

$conn = mysqli_connect("localhost:3306", "root", "", "test");

if ($conn) {

    $name = $_POST['n'];
    $pass = $_POST['p'];
    $hobby = $_POST['h'];
    $temp = "";

    foreach($hobby as $temp1)
    {
        $temp .=$temp1.",";
    }

    if(!isset($_COOKIE[$name]) && !isset($_COOKIE[$pass]))
    {
        echo "Welcome ". $name ." How are you..??";
    }
    else
    {
        setcookie($name,$pass,time() + (24*60*60),"/");
        $insert = mysqli_query($conn, "insert into details(Stu_Name,Password,Hobbies) values('$name','$pass','$temp')");
        $res = mysqli_query($conn, "select * from details");

    while ($res1 = mysqli_fetch_assoc($res)) {
        echo $res1['Stu_Name'] ."---" . $res1['Password'] ."---" . $res1['Hobbies'] ."<br><br>";
    }
}
} else {
    echo "error";
}

mysqli_close($conn);

?>