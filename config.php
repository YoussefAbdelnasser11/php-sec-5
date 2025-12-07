<?php
try {
    $user = 'root';
    $password = '';
    $dsn = "mysql:host=localhost;dbname=sec4;port=3306;charset=utf8";

    $db = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);

    $db->exec("CREATE TABLE IF NOT EXISTS students (
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name VARCHAR(50) NOT NULL,
        level INT NOT NULL,
        gpa FLOAT NOT NULL
    )");

    $students = $db->query("SELECT * FROM students")->fetchAll();

    $total = count($students);

    $avg = $db->query("SELECT AVG(gpa) FROM students")->fetchColumn();

    $top = $db->query("SELECT name, gpa FROM students ORDER BY gpa DESC LIMIT 1")->fetch();

} catch (PDOException $e) {
    echo 'فشل الاتصال: ' . $e->getMessage();
}
