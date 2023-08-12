<!Doctype html>
<html>
    <head>
        <title>Добавить запись в блог</title>
        <meta charset="utf-8">
        <style>
            form {
                width:500px;
            }
            form > div > input,textarea {
                width: 100%;
            }


            textarea {
                height: 300px;
            }
        </style>
    </head>
    <form method="POST" action="addPost.php">
        <div>
            <label for="title">Заголовок записи</label><br>
            <input type="text" name="title" placeholder="заголовок">
        </div>
        <div>
            <label for="author">Автор записи</label><br>
            <input type="text" name="author" placeholder="автор">
        </div>
        <div>
            <label for="rubr_id">Рубрика записи</label><br>
            <select name="rubr_id">
                <?php
                    require_once 'conf.php';
                    $rows = $dbh->query("select * from pod_rubr");
                    foreach ($rows as $row){
                        echo "<option value='".$row['id']."'>".$row['rubr']."</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            
        </div>
        <div>
            <label for="text">Текст записи</label><br>
            <textarea name="text" placeholder="текст"></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Добавить запись">
        </div>

    </form>

    <form method="POST" action="addRubr.php">
        <label for="addRubr">Добавить рубрику</label><br>
            <input type="text" name="addRubr" placeholder="Добавить рубрику">
            <div>
            <input type="submit" name="submit" value="Добавить рубрику">
        </div>
    </form>
</html>