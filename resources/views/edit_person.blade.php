<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Edit on {{$person->name}}'s infromations : </h1> 
   <form action="/update_person/{{$person->id}}" method="post">
    @csrf
    @method('put')
   name : <input type="text" name="name" value="{{$person->name}}">
   age : <input type="number" name='age'  value="{{$person->age}}">
   <select name="gender" id="gender" value="{{$person->gender}}">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
   work : <input type="text" name="work" value="{{$person->work}}">
   <button type="submit"> edit </button>
</form>
</body>
</html>