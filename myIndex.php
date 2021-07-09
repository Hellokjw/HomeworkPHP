<?php
    $conn = mysqli_connect("localhost", "root", "104701", "kosta");

    if ( mysqli_connect_errno() ){
    echo "DB 연결에 실패했습니다" . mysqli_connect_error();
    }

    $sql = "Select * from prolan";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while($row =  mysqli_fetch_array($result))
    {
        $list = $list."<h3><li><a href = \"myIndex.php?id={$row['id']}\">{$row['title']}</li></h3>";
    }

    $article = array(
            'title'=>'HTML Programming'
    );

    $update_link = '';
    $delete_link = '';
    if(isset($_GET['id']))
    {
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "select * from prolan where id = {$_GET['id']}";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        
        $update_link = '<a href = "myUpdate.php?id='.$_GET['id'].'">Update</a>';
        //$delete_link = '<a href = "myprocess_delete.php?id='.$_GET['id'].'">Delete</a>';
        $delete_link = '
        <form action = "myprocess_delete.php" method = "post">
            <input type = "hidden" name  = "id" value="'.$_GET['id'].'">
            <input type = "submit" value = "delete">
        </form>
        ';
    }
?>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Programming</title>
    </head>
    <body>
        <h1>Programming Language</h1>
        <ol>
            <?php
                echo $list;
            ?>
        </ol>

        <a href = "myInsert.php">Insert</a>
        <?=$update_link?>
        <?=$delete_link?>
        <h2><?php 
            echo $article['title']; 
        ?></h2>
    
    </body>
</html>