<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr:200,600" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/restaurants.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">        
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #dee2e67d;
        }
    </style>
</head>

<body>
    <script>
        const keyApi = "{{$key}}";
    </script>
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
