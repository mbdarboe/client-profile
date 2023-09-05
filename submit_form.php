<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "client";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$datetime = $_POST["dateCreated"];
$fullName = $_POST["fullname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"]; //isset($_POST["male"]) ? "Male" : (isset($_POST["female"]) ? "Female" : "Others");
$address = $_POST["address"];
$district = $_POST["district"];
$temperature = $_POST["temperature"];
$systole = $_POST["systole"];
$diastolic = $_POST["diastolic"];
$respiration = $_POST["respiration"];
$puls = $_POST["puls"];
$spO2 = $_POST["spO2"];
$history = $_POST["history"];
$results = $_POST["results"];
$classification = $_POST["classification"];
$diagnoses = $_POST["diagnoses"];
$medication = $_POST["medication"];

// File upload handling
// $file_name = $_FILES["docs"]["name"];
// $file_temp = $_FILES["docs"]["tmp_name"];
// $file_size = $_FILES["docs"]["size"];
// $file_error = $_FILES["docs"]["error"];

// // Check if a file was uploaded
// if ($file_error === 0) {
//     $file_destination = "uploads/" . $file_name; // Specify the directory where you want to store uploaded files
//     move_uploaded_file($file_temp, $file_destination);
// } else {
//     echo "Error uploading file.";
// }

// Insert the data into the database
$sql = "INSERT INTO user_info (	dateCreated, fullname, email, mobile, gender, userAddress, district, temperature, systole, diastolic, rr, puls, spO2, history, results, classification, diagnose, medications)
            VALUES ('$datetime', '$fullName', '$email', '$mobile', '$gender', '$address', '$district', '$temperature', '$systole', '$diastolic', '$respiration', '$puls', '$spO2', '$history', '$results', '$classification', '$diagnoses', '$medication')";

$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result === false) {
    die("Error inserting data into database: " . mysqli_error($conn));
}

// Close the connection to the database
mysqli_close($conn);

// Redirect the user to a confirmation page
header("Location: users.php");
?>