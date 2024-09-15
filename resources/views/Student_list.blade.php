<h3>STUDENT LIST</h3>
<style>
    table,th,tr,td{
        border: 3px solid;
        border-collapse: collapse;
    }
</style>
<table>
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>AGE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->age}}</td>
            <td><a href="/edit/{{$student->id}}">Edit</a></td>
            <td><a href="/delete/{{$student->id}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
