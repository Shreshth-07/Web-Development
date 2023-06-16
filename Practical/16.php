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
    $insert = mysqli_query($conn, "insert into details(Stu_Name,Password,Hobbies) values('$name','$pass','$temp')");
    echo "Details Submitted.....<br><br>";
    
} else {
    echo "error";
}

mysqli_close($conn);

?>