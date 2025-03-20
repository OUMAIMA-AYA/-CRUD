<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create New Person</h1>

    <form action="{{ route('store_person') }}" method="POST">
        @csrf 
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="work">Work:</label>
        <input type="text" name="work" id="work" required>

        <button type="submit">Add New Person</button>
    </form>
</body>
</html>
