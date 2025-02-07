<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW</title>
</head>
<body>
    @foreach ($destinations as $dest)
            <li>{{$dest->destination}}</li>
            <ul>
                <li>
                  Ár:  {{$dest->price}}
                </li>
                
                <li>
                Érkezés: {{$dest->departure}}
                </li>
            </ul>
        @endforeach
</body>
</html>