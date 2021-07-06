<!-- 세계시각 프로그램 만들기 -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo("서울 현재시간: ");
            date_default_timezone_set('Asia/Seoul');
            echo date('Y-m-d H:i:s');
            echo "<br>";

            echo("베이징 현재시간: ");
            date_default_timezone_set('Asia/Beijing');
            echo date('Y-m-d H:i:s');
            echo "<br>";
        ?>
    </body>
</html>
