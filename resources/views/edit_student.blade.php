<h3>Create Student</h3>
<form action="/update/{{$student->id}}" method="POST">
<label for="name">Name</label><input type="text" name="name" value="{{$student->name}}" id="">
<label for="name">Age</label><input type="text" name="age" value="{{$student->age}}" id="">
<label for="name">Phone</label><input type="text" name="phone" value="{{$student->phone}}" id="">
<input type="submit" value="Update">
@csrf
</form>
