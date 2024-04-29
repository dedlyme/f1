<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <h1>Posts</h1>
<ul></ul>
    @foreach ($formula as $formula)
        <li><a a href="show/{{$post->id}}"> {{$formula["team_name"]}} </a></li>
    @endforeach
</ul>
</body>
</html>
{{  }}