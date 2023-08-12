<html>
    <head>
        <title>Личный блог</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: Arial;
            }
            .container {
                width: 1000px;
                margin: 0 auto;
            }

            .post {
                float: left;
                width: 420px;
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Личный блог Иванова И.И.</h1>
            <?php
                require_once 'conf.php';
                $rows = $dbh->query("select * from blog join pod_rubr on blog.rubr_id=pod_rubr.id");
                foreach($rows as $row) {
                    echo "<div class='post'><h2>" . $row['title'] . "</h2>";        
                    echo "<p><i>" . $row['author'] . "</i></p>";
                    echo "<p><i>" . $row['date'] . "</i></p>";
                    echo "<p><i>" . $row['rubr'] . "</i></p>";                    
                    echo "<hr><p>" . $row['text'] . "</p></div>";
                }                
                $dbh = null;
            ?>
        </div>
    </body>
</html>