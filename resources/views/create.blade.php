<html>
<head>
    <style>
body{
    background-color: gray;
}
    </style>
</head>
<body>
    <center>
        <h1>Create Student</h1>
        <hr>
    <form action="/create_student" method="POST">
    <label for="name">Name</label><input type="text" name="name" id=""><br><br>
    <label for="name">Age</label><input type="text" name="age" id=""><br><br>
    <label for="name">Phone</label><input type="text" name="phone" id=""><br><br>
    <input type="submit" value="Submit"><br>
    @csrf
    </form>
    </center>
</body>

</html>
