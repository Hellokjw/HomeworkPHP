<?php
        $conn = mysqli_connect("localhost", "root", "104702", "kosta_db");

        if ( mysqli_connect_errno() )
        {
            echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
        }

        $sql = "Select * from prolan";
        $result = mysqli_query($conn, $sql);
        $list = '';

        while($row =  mysqli_fetch_array($result))
        {
            $escaped_title = htmlspecialchars($row['title']);
            $list = $list."<h3><li><a href = \"myIndex.php?id={$row['id']}\">{$escaped_title}</li></h3>";
        }

        $article = array(
                'title'=>'notice',
                'description'=>'Welcome to Programming World'
        );

        if(isset($_GET['id']))
        {
            $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
            $sql = "select * from prolan where id = {$filtered_id}";
            // echo $sql;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $article['title'] = htmlspecialchars($row['title']);
            $article['description'] = htmlspecialchars($row['description']);
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

        <form action = "myprocess.php" method = "POST">
            <p><input type = "text" name = "title" placeholder = "title"></p>
            <p><textarea name = "description" placeholder = "description"></textarea>
            </p><p><input type = "submit"></p>
        </form>
    </body>
</html>