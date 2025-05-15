<!DOCTYPE>
<html>
    <head>
        <title>Professor Portal</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h2>Professor Search</h2>
        <form action="professor_results.php" method="GET">
            SSN: <input type="text" name="ssn"><br><br>
            <b>OR</b><br><br>
            Course Number: <input type="text" name="course"><br>
            Section Number: <input type="text" name="section"><br><br>
            <button type="submit">Search</button>
        </form>
        <a href="index.php"><button>Home</button></a>
    </body>
</html>
