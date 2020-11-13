<?php
$host = 'localhost:8889';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
//$stmt = $conn->query("SELECT * FROM countries");
$country = filter_input(INPUT_GET, "country", FILTER_SANITIZE_STRING);
//echo $country ;
$find_country = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");

$resultcountry = $find_country->fetchAll(PDO::FETCH_ASSOC);

//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($resultcountry as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
  
</ul>
