<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    <link href = "https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="font-family: Lato;font-size: larger">
{{--@include('nav')--}}
@yield('part1')
@yield('part2')


{{--@include('footer')--}}
</body>
</html>
