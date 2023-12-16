<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email_id'])) {
    // Redirect to the login page or display an error message
    header("Location: login.html");
    exit();
}

$conn = new mysqli("localhost", "root", "password123", "parinata");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Retrieve the user's email_id from the session
    $email_id = $_SESSION['email_id'];

    // Using prepared statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user details
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $email_id = $row["email_id"];
         
            // Add other fields as needed
        }
    } else {
        echo "User details not found.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Add your CSS styles if needed -->
</head>
<body>

    <h1>Welcome <?php echo isset($name) ? $name : ''; ?>!</h1>

    <p>This is your user dashboard.</p>

    <ul>
        <li>Name: <?php echo isset($name) ? $name : ''; ?></li>
        <li>Email: <?php echo isset($email_id) ? $email_id : ''; ?></li>
       
        <!-- Add other fields as needed -->
    </ul>

    <a href="login.html">Logout</a>

</body>
</html>
