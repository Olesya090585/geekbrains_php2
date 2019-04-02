<?php
include "config.php";

try {
    $connect_str = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
    $db = new PDO ($connect_str, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

//    $rows = $db->exec("INSERT INTO goods VALUES
//(null, 'Мяч', 1000),(null, 'Мяч', 1000),
//(null, 'Мяч', 2000),(null, 'Мяч', 1000),
//(null, 'Мяч', 3000),(null, 'Мяч', 1000),
//(null, 'Мяч', 4000),(null, 'Мяч', 1000),
//(null, 'Мяч', 5000),(null, 'Мяч', 1000),
//(null, 'Мяч', 6000),(null, 'Мяч', 1000),
//(null, 'Мяч', 1000),(null, 'Мяч', 1000),
//(null, 'Мяч', 2000),(null, 'Мяч', 1000),
//(null, 'Мяч', 3000),(null, 'Мяч', 1000),
//(null, 'Мяч', 4000),(null, 'Мяч', 1000),
//(null, 'Мяч', 5000),(null, 'Мяч', 1000),
//(null, 'Мяч', 6000),(null, 'Мяч', 1000),
//(null, 'Мяч', 1000),(null, 'Мяч', 1000),
//(null, 'Мяч', 2000),(null, 'Мяч', 1000),
//(null, 'Мяч', 3000),(null, 'Мяч', 1000)
//");

//    $error_array = $db->errorInfo();
//    if ($db->errorCode() != 0000) {
//        echo "SQL ошибка: " . $error_array[2] . '<br />';
//    }

//    if ($rows) echo "Количество затронутых строк: " . $rows . "<br/>";

//    $result = $db->query("SELECT * FROM goods LIMIT 10");
//

//    $sth = $db->prepare("SELECT * FROM goods");
//    $sth->execute();
//    $array = $sth->fetchAll(PDO::FETCH_ASSOC);
//    print_r($array);

    $limit = @$_GET['limit'] or $limit = 10;

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $result = $db->prepare('SELECT * FROM goods LIMIT ?');
    $result->execute(array($limit));
    $array = $result->fetchAll(PDO::FETCH_ASSOC);
//    print_r($array);
    foreach ($array as $item){
        $name = $item['name'];
        $price = $item['price'];
        echo $name.' - '.$price.'<br />';
    }

    $error_array = $db->errorInfo();

    if ($db->errorCode() != 0000) {
        echo "SQL ошибка: " . $error_array[2] . '<br />';
    }

    $limit = $limit + 10;
    echo '<a href="?limit='.$limit.'">Еще</a>';
//
//    while ($row = $result->fetch(PDO::FETCH_COLUMN)) {
//        print_r($row);
//    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
