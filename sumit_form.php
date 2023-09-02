<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "client";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $date_time = $_POST["dateCreated"];
    $full_name = $_POST["fullName"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $gender = isset($_POST["male"]) ? "Male" : (isset($_POST["female"]) ? "Female" : "Others");
    $address = $_POST["address"];
    $district = $_POST["district"];
    $temperature = $_POST["temperature"];
    $systolic = $_POST["systolic"];
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
    $file_name = $_FILES["docs"]["name"];
    $file_temp = $_FILES["docs"]["tmp_name"];
    $file_size = $_FILES["docs"]["size"];
    $file_error = $_FILES["docs"]["error"];

    // Check if a file was uploaded
    if ($file_error === 0) {
        $file_destination = "uploads/" . $file_name; // Specify the directory where you want to store uploaded files
        move_uploaded_file($file_temp, $file_destination);
    } else {
        echo "Error uploading file.";
    }

    // Insert the data into the database
    $sql = "INSERT INTO user_info (	dateCreated, fullname, email, mobile, gender, userAddress, district, temperature, systolic, diastolic, rr, puls, spO2, history, results, classification, diagnose, medications)
            VALUES ('$datetime', '$fullName', '$email', '$mobile', '$gender', '$address', '$district', '$temperature', '$systolic', '$diastolic', '$respiration', '$puls', '$spO2', '$history', '$results', '$classification', '$diagnoses', '$medication')";

    if ($conn->query($sql) === TRUE) {
        echo "Form data submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>