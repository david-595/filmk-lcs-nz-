<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <div>
     <h2>Car data</h2>
     
    
     <p>film cím: <b>{{$film->name}}</b></p>
     <p>Rendező<b>{{$film->director}}</b></p>
     <p>műfaj<b>{{$film->genre}}</b></p>
     <p>Kiadási dátum<b>{{$film->release_date}}</b></p>
    

     
     <form action="{{route('rent.store')}}" method="post">
         @csrf 
         
       
         <input type="hidden" name="film_id" id="id" value="{{$film->id}}">
         Kölcsönző neve: <input type="text" name="rent_name" > <br>
         Kölcsönzés kezdete: <input type="date" name="rent_date" > <br>
         
        
         <button type="submit">Rent</button>
     </form>
 </div>
</body>
</html>