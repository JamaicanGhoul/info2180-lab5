<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country = $_GET['country']
$all = $_GET['all']


if ($all == true && (isset($all) || !empty($all))) {


  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM countries");

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo'<ul>';
  foreach ($results as $row)
  {
   echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
  }
  echo '</ul>';
}
if (isset($country) || !empty($country))
{
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    echo '<ul>';
    foreach ($results as $row) 
    {
        echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
}




