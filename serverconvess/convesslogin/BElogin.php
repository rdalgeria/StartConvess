<?php
session_start(); // Start a session to manage user login status

// Replace this with your database connection logic
$host = 'localhost';
$dbname = 'convessregform';
$username = 'root';
$password = 'wormnitojimalaki';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to fetch user details from the database
    $query = "SELECT * FROM accounts WHERE username = :username AND password = :password";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password); // Note: Hash the password in a real-world scenario
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // User exists, set session and redirect to dashboard or desired page
        $_SESSION['user_id'] = $user['id'];
        header("Location: http://localhost/serverconvess/CONVESS%20START/FEstart.php"); // Redirect to dashboard or another page after successful login
        exit();
    } else {
        header("Location: http://localhost/serverconvess/convesslogin/error.php");
    }
}
?>
