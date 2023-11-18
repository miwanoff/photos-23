<?php

$my_path = "images";
if (is_dir($my_path)) { // якщо існує папка "images"
    $files = scandir($my_path, 1); // отримуємо масив назв файлів, що містяться в папці "images"
    // for ($i = 0; $i < count($files); $i++) { // проходимо по масиву назв файлів
    //     if ($files[$i] != '.' && $files[$i] != '..') { // крім поточної та батьківської директорії
    //         echo $files[$i] . "\n";
    //  }
    // }
}
$dirs = ["10", "11"];

for ($i = 0; $i < count($dirs); $i++) {
    if (!is_dir($dirs[$i])) {
        mkdir($dirs[$i]);
    }
}

$newpath = "10";
$oldpath = "images";
$filename = "IMG_20221028_131539.jpg";

$status = rename($oldpath."/" .$filename, $newpath . "/" .$filename) or exit("Невозможно переименовать файл");
echo "файл успешно переименован";