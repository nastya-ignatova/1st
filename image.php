<!DOCTYPE HTML>
<html lang="ru">
<head>
 <meta charset = "UTF-8">
    <style>
        div {
            height: 500px; /* Высота блока */
            width: 1000px;
            border: 2px solid #000; /* Параметры рамки */
            background: url("image.jpg") 100% 100% no-repeat; /* Добавляем фон */
            background-size: cover; /* Масштабируем фон */
            font-family:"Helvetica";
        }
    </style>
</head>
<div>
<body>

<h1>Игнатова А.И.</h1>

<p>

    <?php
    $file = file("count.txt");
    $count = implode("", $file);
    $count++;
    $myfile = fopen("count.txt","w");
    fputs($myfile,$count);
    fclose($myfile);
    echo '<span>Просмотров:'.$count .'</span> ';
    ?>

</body>
</div>
</html>


