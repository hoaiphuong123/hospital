<?php
// Bước 01; Kết nối tới CSDL:
        define('HOST','localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','hospital');
        $conn = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn)); //Database Connection

?>