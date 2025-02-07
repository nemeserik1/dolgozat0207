<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Destinations</h1>
    <ol>
        @foreach ($destinations as $dest)
            <li>{{$dest->id}}</li>
            <ul>
                <li>{{$dest->destination}}</li>
                <li>{{$dest->price}}</li>
                <li>{{$dest->departure}}</li>
                @if (auth()->check() && auth()->user()->role == 'user')
                    <form action="{{ route('destination.show', $dest->id) }}" method="GET">
                        <input type="submit" value="Kirándulás">
                    </form>
                @endif
            </ul>
        @endforeach
    </ol>
</body>
</html>