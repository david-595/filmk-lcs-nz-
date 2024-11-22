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
    <form action="{{route('new-film.store')}}" method="POST">
        @csrf
        Cím <input type="text" name="name">
        Rendező <input type="text" name="director">
        Műfaj <select name="genre" id="">
                @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ old('id') == $genre->id}}>
                    {{ $genre->genre }}
                </option>
                @endforeach
            </select>
            Megjelenési év <input type="date" name="release_date">
            <input type="submit">
    </form>
</body>
</html>