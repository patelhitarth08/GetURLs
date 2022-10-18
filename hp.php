<?php
    include 'connection.php';
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = " select longurl from urltable where code = $code";
        $query = mysqli_query($conn, $sql);
        while ($info=mysqli_fetch_array($query)) {
            $longurl =  $info['longurl'];
        }

        header('location: ' . $longurl);

    }
    else
    {
        header('location: index.html'); 
    } 
?>