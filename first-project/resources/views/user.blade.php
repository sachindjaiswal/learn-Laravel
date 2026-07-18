<h1>This is view page sdfgsd </h1>

<table border="2">
    <tr>
        <td>Name</td>
        <td>email</td>
        <td>DOJ</td>
    </tr>
    @foreach($record as $user)
         <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
         </tr>
    @endforeach
</table>
    


<x-text msg="Something went wrong" class="error" />