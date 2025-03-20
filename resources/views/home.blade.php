<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    <div><a href="/create_person" >create new person !</a></div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>gender</th>
            <th>work</th>
            <th>supprimer</th>
            <th>edit</th>
        </tr>
        @foreach ($persons as $person)
        <tr>
            <td><a href="/show_person/{{$person->id}}">{{$person->id}}</a></td>
            <td>{{$person->name}}</td>
            <td>{{$person->age}}</td>
            <td>{{$person->gender}}</td>
            <td>{{$person->work}}</td>
            <td>
                <form action="/delete_person/{{$person->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">supprimer</button>
                </form>
            </td>
            <td><a href="/edit_person/{{$person->id}}">edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>