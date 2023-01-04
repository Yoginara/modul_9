<html lang="en">
<head>
    <title>Penggunaan Modularisasi</title>
</head>
<body>
    <h2>Penggunaan require once</h2>
    <?php
    $file = 'C:\\Teks.txt';
    if(file_exists($file))
    {
        echo ("File <b> $file </b> sudah ada !");
    }   else
    {
        echo ("File <b> $file </b> tidak ada !");
    }
    ?>
</html>