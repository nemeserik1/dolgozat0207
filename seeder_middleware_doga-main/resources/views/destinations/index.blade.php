<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <h1>Destinations</h1>
    <ol>
        @foreach ($destinations as $dest)
            <li>{{$dest->destination}}</li>
            <ul>
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