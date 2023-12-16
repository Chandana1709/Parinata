<?php
$conn = new mysqli("localhost", "root", "password123", "parinata");
if ($conn->connect_error)
    die("connection failed" . $conn->connect_error);
else
    echo " ";

$email_id = $_POST['email_id'];
$query = "SELECT * FROM users where email_id='$email_id'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_array($query_run);
?>

<?php
if (isset($_POST['submit'])) {
    $password = $_POST['password'];

    $email_id = $_POST["email_id"];
    $sql = "SELECT * FROM users WHERE email_id='$email_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row["email_id"] == $email_id) {
        $sql = "UPDATE users SET password='$password' WHERE email_id='$email_id'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Password changed successfully!')</script>";
            echo "<script>location.replace('login.html')</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Your email is incorrect. Please try again')</script>";
        echo "<script>location.replace('changepswd.php')</script>";
    }
}
?>
