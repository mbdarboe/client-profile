<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "client";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT * FROM user_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>

<body>
    <h2>User Data</h2>
    <button class="btn btn-primary">Add User</button>
    <table class="table table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">District</th>
            <th scope="col">Temperature</th>
            <th scope="col">Systole</th>
            <th scope="col">Diastolic</th>
            <th scope="col">RR</th>
            <th scope="col">Puls</th>
            <th scope="col">spO2</th>
        </tr>
        <?php
        // Loop through the data and display it in the table
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["dateCreated"] . "</td>";
            echo "<td>" . $row["fullname"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["mobile"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["userAddress"] . "</td>";
            echo "<td>" . $row["district"] . "</td>";
            echo "<td>" . $row["temperature"] . "</td>";
            echo "<td>" . $row["systole"] . "</td>";
            echo "<td>" . $row["diastolic"] . "</td>";
            echo "<td>" . $row["rr"] . "</td>";
            echo "<td>" . $row["puls"] . "</td>";
            echo "<td>" . $row["spO2"] . "</td>";
            echo "<//tr>";
        }
        ?>
    </table>

    <?php
    // Close the connection
    $conn->close();
    ?>
</body>

</html>