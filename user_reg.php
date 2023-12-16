<?php
$email_id = $_POST["email_id"];
$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$address = $_POST["address"];
$password = $_POST["password"];


$conn = new mysqli("localhost", "root", "password123", "parinata");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $query1 = "SELECT * FROM users WHERE email_id='$email_id'";
    $result = $conn->query($query1);

    if ($result->num_rows > 0) {
        echo '<script>alert("Email Id already exists. Try something else.")</script>';
        echo file_get_contents("http://localhost/parinata/reg.php");
        exit();
    } else {
        echo '<script>alert("Registered successfully");window.location="login.html";</script>';

        $sql = "INSERT INTO users(email_id,name,password,address,phone_number) VALUES ('$email_id','$name', '$password' , '$address','$phone_number')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>
