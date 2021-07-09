<?php
        $conn = mysqli_connect("localhost", "root", "104702", "kosta_db");

        settype($_POST['id'], 'integer');
        $filtered = array(
            'id'=>mysqli_real_escape_string($conn ,$_POST['id']),
            'title'=>mysqli_real_escape_string($conn ,$_POST['title']),
            'description'=>mysqli_real_escape_string($conn ,$_POST['description'])
            // 'title'=>$_POST['title'],
            // 'description'=>$_POST['description']
        );
        
        $sql = "
        delete from prolan
        where id = {$filtered['id']}
        ";
        // die($sql);
        
        // INSERT INTO topic (title, description, created) VALUES('life', 'life is ...', NOW())
        // INSERT INTO topic (title, description, created) VALUES('life', 'life is ...', '2018-1-1 00:00:00');-- ', NOW())
        
        $result = mysqli_query($conn, $sql);
        if($result === false)
        {
            echo '문제가 발생했습니다. 관리자에게 문의하세요.';
            echo mysqli_error($conn);
        }
        else{
            echo '삭제 성공했습니다.<a href = "myIndex.php">돌아가기></a>';
        }
?>