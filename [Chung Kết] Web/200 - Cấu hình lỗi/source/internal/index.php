<?php
    // Copy code from: https://stackoverflow.com/questions/13646690/how-to-get-real-ip-from-visitor#answer-28844136
    function getRealUserIp(){
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }

    $IP = getRealUserIp();
    echo "Your IP: " . $IP . "<br>";
    if ($IP === "1.3.3.7") {
        // Flag đã được che dấu đi
        // Đố em tìm cách vào được nhánh if này!
        // Gud luck ^^
        echo "CTF{xxx}";
    }
?>
