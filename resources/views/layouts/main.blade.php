<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f8f8f8;
            border-bottom: 1px solid #ccc;
        }
        .info {
            font-size: 16px;
        }
        .button {
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3;
        }

        .anchor-button {
            display: inline-block; /* Makes the link behave like a block element */
            padding: 10px 20px; /* Adds space inside the button */
            background-color: #007bff; /* Button background color */
            color: white; /* Text color */
            text-align: center; /* Centers the text */
            text-decoration: none; /* Removes underline from the link */
            border: none; /* Removes default border */
            border-radius: 5px; /* Rounds the corners */
            font-size: 16px; /* Font size */
            cursor: pointer; /* Changes cursor to pointer on hover */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        @yield('additional_css')

        @yield('local_script')

    </style>
</head>
<body>

    @yield('content')

        
</body>
</html>