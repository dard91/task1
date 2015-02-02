<html>
<head>
    <title>task1</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    
    <form enctype="multipart/form-data" action="" method="POST">

        <input name="userfile" type="file" />
        <input type="submit" value="Send File" />
    </form>
    <?php

        $uploadfile = PATH . basename($_FILES['userfile']['name']);

        if(isset($_FILES['userfile']['tmp_name'])){ //проверяем существование
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            echo 'файл успешно загружен';
             
    ?>
    <table>
      <tr>
        <td><?=$_FILES['userfile']['name'] ?></td>
        <td><?=$_FILES['userfile']['size'] ?> bites</td>
        <td>
            <form enctype="multipart/form-data" action="" method="POST">
                <input class="del" type="submit" value="delete" />
            </form>     
        </td>
      </tr>

    </table>

<?php
}else {
    echo 'файл не загружен или возникла ошибка';
}
?>
    <?php
       
    
    ?>
    
</body>
<html>

