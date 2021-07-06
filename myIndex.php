<?php
    $conn = mysqli_connect("localhost", "root", "104702", "kosta_db");
    if ( mysqli_connect_errno() )
    {
        echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
    }
?>