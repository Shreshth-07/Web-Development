<?php

$conn = mysqli_connect("localhost:3306", "root", "", "test");

if ($conn) {

    $res = mysqli_query($conn, "select * from details");

    while ($res1 = mysqli_fetch_assoc($res)) {
        echo $res1['Stu_Name'] ."---" . $res1['Password'] ."---" . $res1['Hobbies'] ."<br><br>";
    }
    
} else {
    echo "error";
}

mysqli_close($conn);

?>