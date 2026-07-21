<div>
    This is the student page 
</div>

<table>
    <tr>
        <th>Student Id </th>
        <th>first Name</th>
        <th>Last name</th>
        <th>Age</th>
        <th>email</th>
    </tr>
    @foreach($Students as $student )
    <tr>
        <td>{{$student->student_id}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->email}}</td>
    </tr>
    @endforeach
</table>

