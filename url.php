<?php

    include 'connection.php';
   
    if(isset($_POST['send-url'])){
        
        $long_url = $_POST['url'];
        
        $sql = "SELECT * from urltable";
        $result = mysqli_query($conn, $sql);
        $rowcount = mysqli_num_rows( $result );
        
        $code = str_pad($rowcount, 6, 0, STR_PAD_LEFT);
        
        $shorturl = "geturls.epizy.com/hp.php?code=" . $code;
 
        $request = " insert into urltable(longurl, shorturl, code) values('$long_url','$shorturl','$code') ";
        mysqli_query($conn, $request);
        header('location: index.php?shorturl=' . $shorturl); 

    }
?>