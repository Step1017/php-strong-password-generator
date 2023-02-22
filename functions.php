<?php
    function generatePassword ($num) {
        $password="";
        for ($i=1; $i<=$num; $i++){
            $password .= chr(rand(65, 122));
            echo "<script>console.log('{$password}')</script>";
        };
        return $password;
    };
?>