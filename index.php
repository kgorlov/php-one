<?php

echo "<h1>Hello World!</h1>";

echo "<p>" . date('Y-m-d H:i:s') . "</p>";

echo "<p>" . 'Пока, ' . htmlspecialchars($_GET["sport"]) . '!' . "</p>";

echo "<p>" . 'Привет, ' . htmlspecialchars($_GET["sanya"]) . '!' . "</p>";

$x = 0;


$massiv = ["Kirill","imonity","attationin"];
foreach ($massiv as $value) {
    // echo "<p>" . $value . "</p>";
    echo ("<p>{$value}</p>");

   
}
echo "<h1>запрос</h1>";
$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    // \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=localhost;dbname=abc;charset=utf8mb4;port=3306";
$pdo = new \PDO($dsn, 'attationin', 'sanya123', $options);

$stmt = $pdo->query("SELECT * FROM login");
while ($row = $stmt->fetch()) {
    echo $row['name']."<br />\n";
}