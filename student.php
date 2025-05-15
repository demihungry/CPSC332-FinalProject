<!DOCTYPE>
<html>
    <head>
        <title>Student Portal</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h2>Student Search</h2>
        <form action="student_results.php" method="GET">
            Course Number: <input type="text" name="course"><br><br>
            <b>OR</b><br><br>
            CWID: <input type="text" name="cwid"><br>
            <button type="submit">Search</button>
        </form>
        <a href="index.php"><button>Home</button></a>
    </body>    
</html>
