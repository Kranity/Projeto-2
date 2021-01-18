<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    <style>
        .center {
            width: 60%;
            height: 90%;
            position: absolute;
            left: 20%;
        }

        .h2-center {
            display: block;
            margin: 2% 1% 2% 2%;
            letter-spacing: 2px;
            font-family: 'Arial', sans-serif;
            font-size: 20pt;
            text-align: center;
        }

        .input-center {
            margin: 1% 1% 3% 5%;
            padding: 1%;
            width: 40%;
            border: none;
            border-bottom: 1px solid gray;
            font-family: 'Courier New', sans-serif;
            font-weight: bold;
            font-size: 12pt;
        }

        .input-center[type="submit"] {
            display: block;
            margin: auto;
            margin-bottom: 3%;
            border-radius: 10px;
            font-weight: bold;
            font-size: 12pt;
            width: 20%;
        }

        .input-center:focus {
            outline: none;
        }
    </style>
</head>
<body>
</body>
</html>