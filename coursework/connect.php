<?php

try {
    $connect = new PDO('mysql:host=localhost;dbname=coursework;charset=utf8mb4', 'root', '');
    //   echo "Connect successfully" . "<br>";
    
   

    // SQL query to check user credentials
    $sql = "SELECT * FROM user";
    $infor = $connect->query($sql);
    $sql1 = "SELECT * FROM question";
    $questions = $connect->query($sql1);
        

    
    
    // include "loggin.php";
} catch (PDOException $exception) {
    echo "Connect to database failed";
    echo $exception->getMessage();
}
?>
