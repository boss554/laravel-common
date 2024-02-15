<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear All Commands</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            margin: 0 5px; /* Add margin between buttons */
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Clear All Commands</h1>

        <form action="{{ url('cache') }}" method="GET">
            <button type="submit">Clear Cache</button>
        </form>

        <form action="{{ url('config') }}" method="GET">
            <button type="submit">Clear Config</button>
        </form>

        <form action="{{ url('view') }}" method="GET">
            <button type="submit">Clear View</button>
        </form>

        <form action="{{ url('optimize') }}" method="GET">
            <button type="submit">Clear Optimize</button>
        </form>

        <form action="{{ url('migrate') }}" method="GET">
            <button type="submit">Migrate</button>
        </form>

        <form action="{{ url('seeder') }}" method="GET">
            <button type="submit">Seeder</button>
        </form>

        <!-- Button to clear all commands -->
        <form action="{{ url('clear/all') }}" method="GET">
            <button type="submit">Do All</button>
        </form>
    </div>
</body>
</html>
