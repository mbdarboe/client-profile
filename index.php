<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
                crossorigin="anonymous">

        <!-- Custom CSS styles -->
        <link rel="stylesheet" href="styles/main.css">

        <title>Registration Project</title>
</head>

<body>
        <h1>CENTER FOR DISEASE CONTROL CLIENT PROFILE</h1>
        <div class="container">
                <form method="POST" action="submit_form.php" enctype="multipart/form-data">
                        <!-- Date and Time Section -->
                        <div>
                                <label for="date">Select date and time</label>
                                <input required name="dateCreated" type="datetime-local">
                        </div>

                        <!-- Patient Bio Data Section -->
                        <div>
                                <label for="fullname">Full Name</label>
                                <input required name="fullname" type="text" placeholder="Full name">
                        </div>
                        <div>
                                <label for="email">Email</label>
                                <input required name="email" type="email" placeholder="Email address">
                        </div>
                        <div>
                                <label for="mobile">Mobile Number</label>
                                <input required name="mobile" type="Mobile" placeholder="Mobile Number"><br><br>
                        </div>
                        <div class="gendercontainer">
                                <label>Select your Gender</label><br>
                        </div>
                        <div>
                                <label for="address">Address</label>
                                <input required name="address" type="text"
                                        placeholder="Address eg. Sinchu Alagi"><br><br>
                        </div>
                        <div>
                                <label for="district">Select District</label>
                                <input required name="district" type="text" placeholder="District eg. KMC"><br><br>
                        </div>

                        <!-- Patient Vital Signs Records Section -->
                        <h1>Vital signs records of the client</h1>
                        <div>
                                <label for="temperature">Temperature</label>
                                <input required name="temperature" type="number" step="0.01"
                                        placeholder="Record Temperature">
                        </div>
                        <div class="form-group">
                                <label for="systole">BP Systolic</label>
                                <input required name="systole" type="number" placeholder="Record Systolic">
                        </div>
                        <div class="form-group">
                                <label for="diastolic">BP Diastolic</label><br>
                                <input required name="diastolic" type="number" placeholder="Record Diastolic">
                        </div>
                        <div>
                                <label for="respiration">RR</label>
                                <input required name="respiration" type="number" placeholder="Record Respiration">
                        </div>
                        <div>
                                <label for="puls">Puls</label><br>
                                <input required name="puls" type="number" placeholder="Record Puls">
                        </div>
                        <div>
                                <label for="spO2">SpO2</label><br>
                                <input required name="spO2" type="number" placeholder="Record oxygen saturation">
                        </div>

                        <!-- Patient History and Investigation Section -->
                        <h1>History, investigation, classification, Diagnosis and Treatment of the client</h1>
                        <div>
                                <label for="history">Records History given</label><br>
                                <textarea name="history" id="area" cols="5" rows="5"
                                        placeholder="Patient History"></textarea><br><br>
                        </div>
                        <div>
                                <label for="results">Records patient investigation results</label>
                                <textarea name="results" id="area" cols="5" rows="5"
                                        placeholder="Enter investigation results"></textarea><br>
                        </div>
                        <div>
                                <label for="classification">Classification</label>
                                <input required type="text" name="classification"
                                        placeholder="Enter patient Classification"><br>
                        </div>
                        <div>
                                <label for="diagnoses">Diagnoses</label>
                                <input required type="text" name="diagnoses" placeholder="Enter Diagnoses"><br>
                        </div>
                        <label for="medication">Records medications given</label><br>
                        <textarea name="medication" id="area" cols="5" rows="5"
                                placeholder="Records medications given"></textarea>
                        <br><br>
                        <div class="btn">
                                <button type="submit">Submit Data</button>
                        </div>
                </form>
        </div>
</body>

</html>