<?php
     $conn = mysqli_connect("localhost", "root", "104702", "kosta_db");
     ## connect 타입
     $sql = "Select * From prolan"; 
    $result = mysqli_query($con, $sql); ## 쿼리 타입
    
    while($row = mysqli_fetch_array($result) == TRUE){
        echo '<h1>', $row['title'], '</h1>';
        echo $row['description'];
    }
?>