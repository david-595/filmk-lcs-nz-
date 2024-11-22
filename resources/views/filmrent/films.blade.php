<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    @if (session('success'))
        {{session('success')}}
    @endif
    @foreach ($films as $film)
            <tr>
                <form action="{{route('films.show', $film->id)}}" method="post">
                @csrf
                
                
                <td>{{$film->name}}</td>
                <td>{{$film->director}}</td>
                <td>{{$film->release_date}}</td>
                
                
                <td><button type="submit">Kölcsönzés</button></td>
                </form>
            </tr>
        @endforeach
</body>
</html>