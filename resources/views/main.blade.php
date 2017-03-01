<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">

    <title>Document</title>
</head>
<body>

@include('common.header')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include('common.left_blok')
        </div>
        <div class="col-md-8">
            @yield('content')
        </div>
    </div>

</div>


@include('common.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>