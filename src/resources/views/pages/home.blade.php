<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
    
</head>
<body>
    <header>
          <a href="/dashboard_admin">dashboard admin</a>
    </header>
        
            @if ( isset($_SESSION['error_role']))
                   <p>{{$_SESSION['error_role']}}</p>
            @endif

        <h1>HOME</h1>

        @if (isset($_SESSION['user']))
             <p>user connected : {{$user->nom}} - {{ $user->prenom }}</p>
             <p>roll user : {{$user->role}}</p>
        @endif
</body>
</html>


