<?php
 
$mysqli = new mysqli('localhost', 'root', '', 'riseandfish');
 
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
     . $mysqli->connect_error);
}
echo '<p>Соединение установлено... ' . $mysqli->host_info . "</p>";
$result = $mysqli->query("SHOW TABLES;");
while ($row = $result->fetch_row()) {
    echo "<p>Таблица:</p>";
}
echo 'Версия MYSQL сервера: ' . $mysqli->server_info . "\n";
$mysqli->close();
 

        $query=$mysqli->query('SELECT*FROM sets');
        while($row = $result->fetch_assoc($query)) {
            echo $row['image'].$row['name'].$row['descriptions'].$row['cost'].$row['badge']."<br>";
        }

?>


<!--подрузить sql таблицу
в виде массива

скрипт на сортировку по категориям по базе
-->