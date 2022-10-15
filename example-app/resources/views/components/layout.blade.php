<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href ="{{mix ('/css/app.css')}}" rel="stylesheet">
    <script src="{{mix('/js/app.js')}}"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
    maxium-scale=1.0,minimum-scale=1.0">
    <title>{{$title ?? 'つぶやきアプリ'}}</title>



</head>
<body class="bg-gray-50">
    {{$slot}}

</body>
</html>
