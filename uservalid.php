<?php
$conn = new mysqli("localhost", "root", "password123", "parinata");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";

    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM users WHERE email_id='$email_id' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $email_id = $row["email_id"];
            session_start();
            $_SESSION['email_id'] = $email_id;
        }

        header("Location: userdashboard.php");
    } else {
        echo "<script>alert('Invalid email id or password !')</script>";
        echo "<script>location.replace('login.html')</script>";
    }
}

$conn->close();
?>
