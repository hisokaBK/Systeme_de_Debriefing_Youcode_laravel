<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
</head>
<body>
          <h1>404</h1>
          @if (isset($_SESSION['blocked']))
                 <p>{{$_SESSION['blocked']}}</p>
          @endif
</body>
</html>