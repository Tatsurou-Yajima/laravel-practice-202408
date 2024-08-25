<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Hello/Index</h1>
    <p>{!! $msg !!}</p>
    <div id="app">
        <my-component></my-component>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>

</html>
