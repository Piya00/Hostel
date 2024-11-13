<?php
// Connection string components
$host = 'ep-dark-sound-a5trmxmi.us-east-2.aws.neon.tech';
$dbname = 'neondb';
$user = 'neondb_owner';
$password = '0qiS2YQWOpme';
$port = '5432';
$sslmode = 'require';

try {
    // Set up DSN (Data Source Name)
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=$sslmode";

    // Create a PDO instance (connect to the database)
    $pdo = new PDO($dsn, $user, $password);

    // Set error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to the Neon database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
