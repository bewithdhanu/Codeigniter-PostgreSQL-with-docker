<?php    

try {
  $conn = new PDO('pgsql:host=postgres;port=5432;dbname='.getenv("POSTGRES_DB") .'',''.getenv("POSTGRES_USER") .'',''.getenv("POSTGRES_PASSWORD") .'');
  $conn->query("SET NAMES UTF8");
} catch (PDOException $e) {
  die('Connection failed: ' . $e->getMessage());
}
