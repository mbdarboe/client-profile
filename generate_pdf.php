<?php
require_once('tcpdf/tcpdf.php');

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

// Get the userId from the URL parameter
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
} else {
    die("User ID not provided.");
}

// SQL query to retrieve data for the specific user
$sql = "SELECT * FROM user_info WHERE id = $userId";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    die("User not found.");
}

// Create a new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information
$pdf->SetCreator('Haruna Ali Baldeh');
$pdf->SetAuthor('Haruna Ali Baldeh');
$pdf->SetTitle('User Information PDF');
$pdf->SetHeaderData('', 0, 'User Information', '');

// Add a page
$pdf->AddPage();

// Fetch the user data
$row = $result->fetch_assoc();

// Create a two-column layout
$pdf->SetFont('helvetica', '', 12);

// Left Column - Personal Information
$pdf->SetXY(20, 40);
$pdf->Cell(60, 10, 'Personal Information', 0, 1, 'L');
$pdf->SetX(20);
$pdf->Cell(60, 10, "Full Name: {$row['fullname']}", 0, 1, 'L');
$pdf->SetX(20);
$pdf->Cell(60, 10, "Address: {$row['userAddress']}", 0, 1, 'L');
$pdf->SetX(20);
$pdf->Cell(60, 10, "Phone: {$row['mobile']}", 0, 1, 'L');
$pdf->SetX(20);
$pdf->Cell(60, 10, "Date: {$row['dateCreated']}", 0, 1, 'L');

// Right Column - Health Information
$pdf->SetXY(100, 40);
$pdf->Cell(60, 10, 'Health Information', 0, 1, 'L');
$pdf->SetX(100);
$pdf->Cell(60, 10, "Temperature: {$row['temperature']}", 0, 1, 'L');
$pdf->SetX(100);
$pdf->Cell(60, 10, "Systole: {$row['systole']}", 0, 1, 'L');
$pdf->SetX(100);
$pdf->Cell(60, 10, "Diastolic: {$row['diastolic']}", 0, 1, 'L');
$pdf->SetX(100);
$pdf->Cell(60, 10, "Respiration: {$row['rr']}", 0, 1, 'L');
$pdf->SetX(100);
$pdf->Cell(60, 10, "Puls: {$row['puls']}", 0, 1, 'L');
$pdf->SetX(100);
$pdf->Cell(60, 10, "spO2: {$row['spO2']}", 0, 1, 'L');

// Output the PDF
$pdf->Output('user_information.pdf', 'I');

// Close the database connection
$conn->close();
?>