<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- cssをインポート -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div class="jumbotron bg-primary text-white">
<h1>@yield('title2')</h1>
</div>
</div>
@yield('content')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
