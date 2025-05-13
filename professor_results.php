<?php

$servername = "localhost";
$username = "demi";
$password = "5236";
$dbname = "cpsc332";

//$servername = "ecs.fullerton.edu";
//$username = "cs332u5";
//$password = "5L5TtTHs";
//$dbname = "cs332u5";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$course = $_GET['course'];
$section = $_GET['section'];
$ssn = $_GET['ssn'];

echo "<h2>Professor Search Results</h2>";
if (!empty($ssn)) {
    $sql = "SELECT Course.Title, CourseSection.Room, CourseSection.Days, CourseSection.Starttime, CourseSection.Endtime
            FROM Professor, Department, Course, CourseSection
            WHERE Professor.Ssn = '$ssn'
                AND Professor.Dnumber = Department.Dnumber 
                AND Department.Dnumber = Course.Dnumber 
                AND Course.Cnumber = CourseSection.Cnumber;";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['ssn' => $ssn]);

    if ($stmt->rowCount() > 0) {
        echo "<table><tr><th>Title</th><th>Room</th><th>Days</th><th>Start Time</th><th>End Time</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row["Title"] . "</td><td>" . $row["Room"] . "</td><td>" . $row["Days"] . "</td><td>" . $row["Starttime"] . "</td><td>" . $row["Endtime"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
} elseif (!empty($course) && !empty($section)) {
    $sql = "SELECT Count(Distinct Student.Cwid) AS Count, Enrollment.grade
            FROM Course, CourseSection, Enrollment, Student
            WHERE Course.Cnumber = '$course'
                AND CourseSection.Snumber = '$section' 
                AND Course.Cnumber = CourseSection.Cnumber 
                AND CourseSection.Snumber = Enrollment.ESnumber 
                AND Enrollment.ECwid = Student.Cwid
            GROUP BY Enrollment.Grade;";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h3>Grade Distribution for Course $course Section $section</h3>";
        echo "<table border='1'><tr><th>Grade</th><th>Number of Students</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['Grade']}</td><td>{$row['Count']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
} else {
    echo "Please provide either a SSN or both Course Number and Section Number.";

}

$conn->close();
?>
<br>
<a href="professor.php"><button>Go back to search page</button></a>
<br>
<a href="index.php"><button>Home</button></a>
