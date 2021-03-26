<?php

    include('conexion.php');
    if(!empty($_POST['txtFName']) && !empty($_POST['txtLName']) && !empty($_POST['txtSubject']) && !empty($_POST['txtaMessage'])){
    $fname = $_POST['txtFName'];
    $lname = $_POST['txtLName'];
    $subject = $_POST['txtSubject'];
    $message = $_POST['txtaMessage'];

        $sql = "INSERT INTO messages(fname, lname, subject, message) VALUES ('$fname', '$lname', '$subject', '$message')";
        $conn->exec($sql);
    }
    else{
        echo "No se recibieron datos";
    }

    header('Location: index.php');

?>