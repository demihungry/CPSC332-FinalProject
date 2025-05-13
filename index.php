<!DOCTYPE html>
<html>
<head>
    <title>332 Final Project</title>
</head>

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f3f4f6;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 50px;
    }

    h1 {
        color: #333;
    }

    a button {
        padding: 10px 20px;
        background-color: #4f46e5;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 12px;
    }

    a button:hover {
        background-color: #4338ca;
    }
</style>

<body>
    <h1>Welcome to Portal</h1>

    <p>
        Are you a professor or a student?
    </p>
    <a href="professor.php"><button>Professor Portal</button></a>
    <a href="student.php"><button>Student Portal</button></a>

</body>
</html>
