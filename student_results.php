<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Search Results</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<?php

$servername = "mariadb";
$username = "cs332u5";
$password = "5L5TtTHs";
$dbname = "cs332u5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course = $_GET['course'];
$cwid = $_GET['cwid'];

echo "<h2>Student Search Results</h2>";

if (!empty($course)) {
    $sql = "SELECT CourseSection.Snumber, CourseSection.Room, CourseSection.Starttime, CourseSection.Endtime, CourseSection.Days, count(Distinct Student.Cwid) AS Enrolled
            FROM Course, CourseSection, Enrollment, Student
            WHERE Course.Cnumber = '$course'
                AND Course.Cnumber = CourseSection.Cnumber
                AND CourseSection.Snumber = Enrollment.ESnumber
                AND Enrollment.ECwid = Student.Cwid
            GROUP BY CourseSection.Snumber, CourseSection.Room, CourseSection.Starttime, CourseSection.Endtime, CourseSection.Days;";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Section Number</th><th>Room</th><th>Start Time</th><th>End Time</th><th>Days</th><th>Enrolled Students</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Snumber"] . "</td><td>" . $row["Room"] . "</td><td>" . $row["Starttime"] . "</td><td>" . $row["Endtime"] . "</td><td>" . $row["Days"] . "</td><td>" . $row["Enrolled"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No sections found.";
    }
} elseif (!empty($cwid)) {
    $sql = "SELECT Course.Cnumber, Enrollment.Grade
            FROM Student, Enrollment, CourseSection, Course
            WHERE Student.Cwid = '$cwid'
                AND Student.Cwid = Enrollment.ECwid 
                AND Enrollment.ESnumber = CourseSection.Snumber 
                AND CourseSection.Cnumber = Course.Cnumber
            GROUP BY Course.Cnumber, Enrollment.Grade;";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Course Number</th><th>Grade</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Cnumber"] . "</td><td>" . $row["Grade"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No grades found.";
    }
} else {
    echo "Please provide either a Course Number or a CWID.";
}

$conn->close();
?>
<br>
<a href="student.php"><button>Go back to search page</button></a>
<br>
<a href="index.php"><button>Home</button></a>

</body>
</html>