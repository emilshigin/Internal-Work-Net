@props(['tabTitle' => 'Login','bodyClass' => ''])
<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>{{ucfirst($tabTitle)}} | worknet</title>
</head>
<body @if ($bodyClass)class="{{$bodyClass}}"@endif>  
    {{$slot}}
</body>
</html>