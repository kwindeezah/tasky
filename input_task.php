<?php

include('config.php');

if(isset($_POST['submit'])){
    $task = $_POST['list'];

    $query = "INSERT INTO tasks (task) VALUES ('$task')";
// echo $query; 
// die();
    $insertQuery = mysqli_query($conn, $query);
    // echo $insertQuery;
    // die();

    if($query){
       header("Location: index.php");
    }
};