<?php
    $conn = mysqli_connect("localhost", "root", "104702", "kosta_db");

    $filtered = array(
        'title'=>mysqli_real_escape_string($conn, $_POST['title']), 
        'description'=>mysqli_real_escape_string($conn, $_POST['description'])
        // 'title'=>$_POST['title'],
        // 'description'=>$_POST['description']
    );

    $sql = "
        insert into prolan(title, description, created)
        Values(
            '{$filtered['title']}',
            '{$filtered['description']}',
            NOW()
        )";
    // die($sql);
    
    $result = mysqli_query($con, $sql); ## 쿼리문 2개를 붙여 쓸 수 있는 것은 불가능함!
    if($result == false){
            echo '문제가 발생했습니다. 관리자에게 문의하세요!';
            echo mysqli_error($con);
    }else{
            echo '입력 성공했습니다.
            <p> <a href= "myIndex.php">처음으로</a> </p>';
    }
?>