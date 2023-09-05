<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
                crossorigin="anonymous">
        <!-- css custom styles -->
        <link rel="stylesheet" href="styles/main.css">

        <title>Registration Project</title>
</head>

<body>

        <h1>CENTER FOR DISEASE CONTROL CLIENT PROFILE</h1>
        <div class="container">
                <forms action="submit.php" method="POST" enctype="multipart/form-data">

                        <!-- This section contains only date and time details -->
                        <div>
                                <label for="date">Select date and time</label>
                                <input name="dateCreated" type="datetime-local">
                        </div>
                        <!-- This section contain only patient bio data code -->
                        <div>
                                <label for="full name">Full Name</label>
                                <input name="fullName" type="text" placeholder="Full name">
                        </div>
                        <div>
                                <label for="email">Email</label>
                                <input type="email" placeholder="email adress">
                                <div>
                                        <label for="Mobile">Mobile Number</label>
                                        <input name="mobile" type="Mobile" placeholder="Mobile Number"><br><br>
                                </div>
                                <div>
                                        <div class="gendercontainer">
                                                <label for="">Select your Gender</label><br>
                                                <input class="gender1" type="radio" name="male">Male
                                                <input class="gender1" type="radio" name="female">Female
                                                <input class="gender1" type="radio" name="others">Others
                                        </div>
                                        <div>
                                                <label type="Adress">Select Address</label>
                                                <select class="form-select" aria-label="Default select example">
                                                        <option value="Lamin CDC">Lamin CDC</option>
                                                        <option value="Babilon">Babilon</option>
                                                        <option value="Makkumbaya">Makumbaya</option>
                                                        <option value="CDC Medina">CDC Madina</option>
                                                        <option value="Lamin Satayba">Lamin Satayba</option>

                                                </select>
                                        </div>

                                        <div>
                                                <label type="District">Select District</label>
                                                <select class="form-select" aria-label="Default select example">
                                                        <option value="Kombo North">Kombo Noth</option>
                                                        <option value="KMC">KMC</option>
                                                        <option value="Kombo South">Kombo South</option>
                                                        <option value="Kombo East">kombo east</option>
                                                        <option value="Kombo Central">Kombo Central</option>
                                                </select>
                                        </div>

                                        <!-- This section contain only patient vital signs records -->
                                        <h1> Vital signs records of the client </h1>

                                        <div>
                                                <label for="Vital">Temperature</label>
                                                <input name="temperature" type="number decimal"
                                                        placeholder="Record Temperature">
                                                <label for="Vital">BP Systolic</label>
                                                <div class="form-group">
                                                        <input name="systolic" type="number"
                                                                placeholder="Record Systolic ">
                                                </div>
                                                <div>
                                                        <labe for="Vital">BP Diastolic</labe><br>
                                                        <div class="form-group">
                                                                <input name="diastolic" type="number"
                                                                        placeholder="Record Diastolic">
                                                        </div>
                                                        <div>
                                                                <label for="Vital">RR</label>
                                                                <input name="respiration" type="number"
                                                                        placeholder="Record Respiration">
                                                        </div>
                                                        <div>
                                                                <label for="vital">Puls</label><br>
                                                                <input name="puls" type="number"
                                                                        placeholder="Record Puls">
                                                        </div>
                                                        <div>
                                                                <label for="Vital">SpO2</label><br>
                                                                <input name="spO2" type="number"
                                                                        placeholder="Record oxygen saturation">
                                                        </div>

                                                        <!-- This section contain patient history and investigation code -->
                                                        <h1> History, investigation, clasification, Diagnosis and
                                                                treament of the client</h1>
                                                        <div>
                                                                <label for="History">Records History given</label><br>
                                                                <textarea name="history" id="area" col="5" rows="5"
                                                                        placeholder="Patient History"></textarea><br><br>
                                                        </div>
                                                        <div>
                                                                <label for="investigation">Records patient investigation
                                                                        results</label>
                                                                <textarea name="results" id="area" col="5" rows="5"
                                                                        placeholder="Enter investigation results"></textarea><br>
                                                        </div>

                                                        <div>
                                                                <label for="Classification">Classification</label>
                                                                <input type="text" name="classification"
                                                                        placeholder="Enter patient Classification"><br>
                                                        </div>
                                                        <div>
                                                                <label for="Diagnoses">Diagnoses</label>
                                                                <input type="text" name="diagnoses"
                                                                        placeholder="Enter Diagnoses"><br>
                                                        </div>

                                                        <label for="Enter treatment and medication">Records medications
                                                                given</label><br>
                                                        <textarea name="medication" id="area" col="5" rows="5"
                                                                placeholder="Records medications given"></textarea>
                                                        <br><br>
                                                </div>
                                                <div>
                                                        <label for="file">Attach client documents</label>
                                                        <input name="docs" type="file"><br><br>
                                                </div>

                                                <div class="btn">
                                                        <button type="submit">Submit Data</button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        </form>
        </div>

</body>

</html>

</body>

</html>