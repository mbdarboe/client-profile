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

        <title>Registration Project</title>
</head>

<body>
        <style>
                {
                        box-sizing: border-box
                }

                body {
                        background-color: rgba(223, 107, 18, 0.35);

                        p.inset {
                                border-style: inset;
                        }
                }

                h1 {
                        text-align: center;
                        color: rgb(21, 54, 215);
                }

                .container {
                        width: 70%;
                        margin: 0 auto;

                }

                input {
                        width: 100%;
                        padding: 15px;
                        margin: 4px;
                        border: 2px solid#4b65e2;
                        font-size: 18px;
                        border-radius: 10px;

                }

                ::placeholder {
                        text-align: center;
                }

                .gendercontainer {
                        text-align: center;
                        font-size: 25px;

                }

                .gender1 {
                        width: 80px;
                }

                .defult select sample1 {
                        width: 50px;
                }

                label {
                        font-weight: bold;
                        padding: 10px;
                        font-size: 22px;
                }
                }

                .btn {
                        text-align: center;

                }

                textarea {
                        width: 100%;
                        height: 150px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #4b65e2;
                        border-radius: 10px;
                        background-color: #edeff0;
                        font-size: 18px;
                        resize: none;
                }

                .form-select {
                        width: 100%;
                        height: 50px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #4b65e2;
                        border-radius: 10px;
                        background-color: #edeff0;
                        font-size: 18px;
                }

                input[type=file]::file-selector-button {
                        margin-right: 20px;
                        border: none;
                        background: #698fe1;
                        padding: 10px 20px;
                        border-radius: 10px;
                        color: #572571;
                        cursor: pointer;
                }

                input[type=file]::file-selector-button:hover {
                        background: #0846af;
                }

                button {
                        padding: 10px;
                        width: 840%;
                        border-radius: 10px;
                        background-color: green;
                        font-size: 18px;
                        margin-right: 20%;
                }
        </style>
        <h1>CENTER FOR DISEASE CONTROL CLIENT PROFILE</h1>
        <div class="container">
                <forms action="">

                        <!-- This section contains only date and time details -->
                        <div>
                                <label for="date">Select date and time</label>
                                <input type="datetime-local">
                        </div>
                        <!-- This section contain only patient bio data code -->
                        <div>
                                <label for="full name">Full Name</label>
                                <input type="text" placeholder="Full name">
                        </div>
                        <div>
                                <label for="email">Email</label>
                                <input type="email" placeholder="email adress">
                                <div>
                                        <label for="Mobile">Mobile Number</label>
                                        <input type="Mobile" placeholder="Mobile Number"><br><br>
                                </div>
                                <div>
                                        <div class="gendercontainer">
                                                <label for="">Select your Gender</label><br>
                                                <input class="gender1" type="radio" name="gender">Male
                                                <input class="gender1" type="radio" name="gender">Female
                                                <input class="gender1" type="radio" name="gender">Others
                                        </div>
                                        <div>
                                                <label type="Adress">Select Address</label>
                                                <select class="form-select" aria-label="Default select example">
                                                        <option value="5">Lamin CDC</option>
                                                        <option value="4">Babilon</option>
                                                        <option value="3">Makumbaya</option>
                                                        <option value="2">CDC Madina</option>
                                                        <option value="1">Lamin Satayba</option>

                                                </select>
                                        </div>

                                        <div>
                                                <label type="District">Select District</label>
                                                <select class="form-select" aria-label="Default select example">
                                                        <option value="5">Kombo Noth</option>
                                                        <option value="4">KMC</option>
                                                        <option value="3">Kombo South</option>
                                                        <option value="1">kombo east</option>
                                                        <option value="1">Kombo Central</option>
                                                </select>
                                        </div>

                                        <!-- This section contain only patient vital signs records -->
                                        <h1> Vital signs records of the client </h1>

                                        <div>
                                                <label for="Vital">Temperature</label>
                                                <input type="number decimal" placeholder="Record Temperature">
                                                <label for="Vital">BP Systolic</label>
                                                <div class="form-group">
                                                        <input type="number" placeholder="Record Systolic ">
                                                </div>
                                                <div>
                                                        <label for="Vital">BP Diastolic</label><br>
                                                        <div class="form-group">
                                                                <input type="number" placeholder="Record Diastolic">
                                                        </div>
                                                        <div>
                                                                <label for="Vital">RR</label>
                                                                <input type="number" placeholder="Record Respiration">
                                                        </div>
                                                        <div>
                                                                <label for="vital">Puls</label><br>
                                                                <input type="number" placeholder="Record Puls">
                                                        </div>
                                                        <div>
                                                                <label for="Vital">SpO2</label><br>
                                                                <input type="number"
                                                                        placeholder="Record oxygen saturation">
                                                        </div>

                                                        <!-- This section contain patient history and investigation code -->
                                                        <h1> History, investigation, clasification, Diagnosis and
                                                                treament of the client</h1>
                                                        <div>
                                                                <label for="History">Records History given</label><br>
                                                                <textarea name="" id="area" col="5" rows="5"
                                                                        placeholder="Patient History"></textarea><br><br>
                                                        </div>
                                                        <div>
                                                                <label for="investigation">Records patient investigation
                                                                        results</label>
                                                                <textarea name="" id="area" col="5" rows="5"
                                                                        placeholder="Enter investigation results"></textarea><br>
                                                        </div>

                                                        <div>
                                                                <label for="Classification">Classification</label>
                                                                <input type="text" name="Classification"
                                                                        placeholder="Enter patient Classification"><br>
                                                        </div>
                                                        <div>
                                                                <label for="Diagnoses">Diagnoses</label>
                                                                <input type="text" name="Diagnoses"
                                                                        placeholder="Enter Diagnoses"><br>
                                                        </div>

                                                        <label for="Enter treatment and medication">Records medications
                                                                given</label><br>
                                                        <textarea name="" id="area" col="5" rows="5"
                                                                placeholder="Records medications given"></textarea>
                                                        <br><br>
                                                </div>
                                                <div>
                                                        <label for="file">Attach client documents</label>
                                                        <input type="file"><br><br>
                                                </div>

                                                <div class="btn">
                                                        <button type="submit">Submit Data</button>
                                                        </form>

</body>

</html>

</body>

</html>