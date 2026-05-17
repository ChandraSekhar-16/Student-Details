<?php
$servername = "localhost";
$username = "root";      
$password = "";          
$dbname = "college_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ",$conn->connect_error);
}

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $college_roll_no = $_POST['college_roll_no'];
    $exam_roll_no = $_POST['exam_roll_no'];
    $stream = $_POST['stream'];
    $major_subject = $_POST['major_subject'];
    $minor_subject_1 = $_POST['minor_subject_1'];
    
    $minor_subject_2 = $_POST['minor_subject_2'];

    $mdc_1 = $_POST['mdc_1'];
    $mdc_2 = $_POST['mdc_2'];
    $mdc_3 = $_POST['mdc_3'];
    
    $aec_1 = $_POST['aec_1'];
    $aec_2 = $_POST['aec_2'];
    
    $sec_1 = $_POST['sec_1'];
    $sec_2 = $_POST['sec_2'];
    $sec_3 = $_POST['sec_3'];
    
    $vac_1 = $_POST['vac_1'];
    $vac_2 = $_POST['vac_2'];
    $vac_3 = $_POST['vac_3'];
    $vac_4 = $_POST['vac_4'];

    $sql="INSERT INTO students (Name, College Roll_no, Exam_roll_no, Stream, Major_subject, Minor_subject_1,Minor_subject_2, Mdc_1, Mdc_2, Mdc_3, AEC_1, AEC_2, Sec_1, Sec_2, Sec_3, Vac_1, Vac_2, Vac_3, Vac_4)VALUES($full_name, $college_roll_no, $exam_roll_no, $stream, $major_subject, $minor_subject_1,$minor_subject_2,$mdc_1, $mdc_2, $mdc_3, $aec_1, $aec_2, $sec_1, $sec_2, $sec_3, $vac_1, $vac_2, $vac_3, $vac_4)";

  
      if ($conn->query($sql)==True {
        echo "<h3 style='color: green; text-align: center;'>Registration Successful! Data saved.</h3>";
        echo "<p style='text-align: center;'><a href='index.html'>Go Back</a></p>";
    } else {
        echo "Error: ";
    }



    $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max_width: 700px;
            margin: 0 auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; 
        }
        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #218838;
        }
        .section-title {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 1.1em;
            color: #007bff;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>
    <form action="" method="POST">
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="full_name" required>
        </div>
        <div class="form-group">
            <label>College Roll No:</label>
            <input type="text" name="college_roll_no" required>
        </div>
        <div class="form-group">
            <label>Exam Roll Number:</label>
            <input type="number" name="exam_roll_no" required>
        </div>
        <div class="form-group">
            <label>Stream:</label>
            <select name="stream" required>
                <option value="">-- Select Stream --</option>
                <option value="Science">Science</option>
                <option value="Arts">Arts</option>
                <option value="Commerce">Commerce</option>
            </select>
        </div>
        <div class="form-group">
            <label>Major Subject:</label>
            <input type="text" name="major_subject" required>
        </div>
        <div class="form-group">
            <label>Minor Subject_1:</label>
            <input type="text" name="minor_subject_1" required>
<label>Minor Subject_2:</label>
            <input type="text" name="minor_subject_2" required>

        </div>

        <div class="section-title">Multi-Disciplinary Courses (MDC)</div>
        <div class="form-group">
            <label>MDC 1:</label>
            <select name="mdc_1">
                <option value="None">-- Select --</option>
                <option value="English">English</option>
                <option value="Philosphy">Philosphy</option>
                <option value="Economics">Economics</option>
		<option value="Sociology">Sociology</option>
		<option value="Psychology">Psychology</option>
		<option value="Physics">Physics</option>
		<option value="Mathematics">Mathematics</option>
		<option value="Computer Science">Computer Science</option>
            </select>
        </div>
        <div class="form-group">
            <label>MDC 2:</label>
            <select name="mdc_2">
                <option value="None">-- Select --</option>
                <option value="Odia">Odia</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Pol Science">Pol Science</option>
                <option value="Education">Education</option>
                <option value="Statistics">Statistics</option>
                <option value="Commerce">Commerce</option>
                <option value="Botany">Botany</option>

            </select>
        </div>
        <div class="form-group">
            <label>MDC 3:</label>
            <select name="mdc_3">
                <option value="None">-- Select --</option>
                <option value="Sanskrit">Sanskrit</option>
                <option value="Geography">Geography</option>
                <option value="Geology">Geology</option>
                <option value="History">History</option>
                <option value="Anthropology">Anthropology</option>
                <option value="Hindi">Hindi</option>
                <option value="Zoology">Zoology</option>

            </select>
        </div>

        <div class="section-title">Ability Enhancement Courses (AEC)</div>
        <div class="form-group">
            <label>AEC 1:</label>
            <input type="text" name="aec_1" placeholder="e.g. Odia">
        </div>
        <div class="form-group">
            <label>AEC 2:</label>
            <input type="text" name="aec_2" placeholder="e.g. English Communication">
        </div>

        <div class="section-title">Skill Enhancement Courses (SEC)</div>
        <div class="form-group">
            <label>SEC 1:</label>
            <select name="sec_1">
                <option value="None">-- Select --</option>
                <option value="History">History</option>
                <option value="Pol.Sc">Pol.Sc</option>
                <option value="Pol.Sc">Pol.Sc</option>
                <option value="Anthropology">Anthropology</option>
                <option value="Math">Math</option>

                <option value="Env Science">Env Sci</option>

            </select>
        </div>
        <div class="form-group">
            <label>SEC 2:</label>
            <select name="sec_2">
                <option value="None">-- Select --</option>
                <option value="Education">Education</option>
                <option value="Geography">Geography</option>
                <option value="Zoology">Zoology</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Physics">Physics</option>

            </select>
        </div>
        <div class="form-group">
            <label>SEC 3:</label>
            <select name="sec_3">
                <option value="None">-- Select --</option>
                <option value="Psychology">Psychology</option>
                <option value="Statistics">Statistics</option>
                <option value="Botany">Botany</option>
                <option value="Commerce">Commerce</option>
                <option value="Computer Sci">Computer Sci</option>

            </select>
        </div>

        <div class="section-title">Value Added Courses (VAC)</div>
        <div class="form-group">
            <label>VAC 1:</label>
            <select name="vac_1">
                <option value="None">-- Select --</option>
                <option value="Ethics">Ethics</option>
                <option value="Yoga">Yoga</option>
            </select>
        </div>
        <div class="form-group">
            <label>VAC 2:</label>
            <select name="vac_2">
                <option value="None">-- Select --</option>
                <option value="Sports">Sports</option>
                <option value="Art">Art</option>
            </select>
        </div>
        <div class="form-group">
            <label>VAC 3:</label>
            <select name="vac_3">
                <option value="None">-- Select --</option>
                <option value="Culture">Culture</option>
                <option value="NCC">NCC</option>
            </select>
        </div>
        <div class="form-group">
            <label>VAC 4:</label>
            <select name="vac_4">
                <option value="None">-- Select --</option>
                <option value="NSS">NSS</option>
                <option value="Community Service">Community Service</option>
            </select>
        </div>

        <button type="submit" name="submit">submit</button>
    </form>
</div>

</body>
</html>
