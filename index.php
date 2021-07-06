<!DOCTYPE html>
<html>
    <head>
        <meta charset= "UTF-8">
        <title>URL Parameter</title>
    </head>
    <body>
        <h1>Programming Language</h1>
        <ol>
            <li><a href = "index.php?title=Java">Java</a></li>
            <li><a href = "index.php?title=Python">Python</a></li>
            <li><a href = "index.php?title=HTML">HTML</a></li>
        </ol>
        <h2>
            <?php 
                if(isset($_GET['title'])){
                    echo $_GET['title'];
                }
                else{
                    echo "공지사항";
                }  
            ?>
        </h2>
        <?php 
        if(isset($_GET['title'])){
            echo file_get_contents("mydata/".$_GET['title']);
        }else{
            echo "Welcome~!!";
        }
        ?> <br>
    </body>
</html>
