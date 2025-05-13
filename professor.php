<!DOCTYPE>
<html>
    <head>
        <title>Professor Portal</title>
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

        h2 {
            color: #333;
        }

        form {
            background-color: white;
            padding: 20px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input {
            padding: 8px 10px;
            margin: 8px 0;
            width: 100%;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 12px;
        }

        button:hover {
            background-color: #4338ca;
        }

        a button {
            background-color: #6b7280;
            margin-top: 20px;
        }

        a button:hover {
            background-color: #4b5563;
        }
    
    </style>

    <body>
        <h2>Professor Search</h2>
        <form action="professor_results.php" method="GET">
            SSN: <input type="text" name="ssn" required><br><br>
            <b>OR</b><br><br>
            Course Number: <input type="text" name="course"><br>
            Section Number: <input type="text" name="section"><br><br>
            <button type="submit">Search</button>
        </form>
        <a href="index.php"><button>Home</button></a>
    </body>
</html>
