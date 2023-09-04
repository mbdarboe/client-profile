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
    <title>Users Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>

<body>
    <h2>CENTER FOR DISEASE CONTROL CLIENTS PROFILE</h2>
    <button class="btn btn-primary" onclick="window.location='index.php'">Add User</button>
    <table class="table table-bordered">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Full Name</th>
            <!-- Add other table headers here -->
            <th scope="col">Actions</th> <!-- Add a new header for actions -->
        </tr>
        <?php
        // Loop through the data and display it in the table
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["dateCreated"] . "</td>";
            echo "<td>" . $row["fullname"] . "</td>";
            // Add other table cells for other fields as needed
            echo "<td>";
            echo "<button class='btn btn-success' onclick='printUserPDF(" . $row["id"] . ")'>Print PDF</button>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Close the connection
    $conn->close();
    ?>

    <script>

        function printUserPDF(userId) {
            // Use JavaScript to open a new window or tab and generate the PDF for the specific user.
            window.open('generate_pdf.php?userId=' + userId, '_blank');
        }

    </script>
</body>

</html>