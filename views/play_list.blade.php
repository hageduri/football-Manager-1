<h1>Player Lists</h1>

<table border="1">
    
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name </td>
        <td>Gender</td>
        <td>Position</td>
        <td>Address 1</td>
        <td>Address 2</td>
        <td>District</td>
        <td>Pin Code</td>
        <td>Photo</td>
        <td>Phone No.</td>
        <td>Email</td>
        <td>Aadhar No.</td>
        <td>Actions</td>   
    </tr>
    
    

    @foreach ($players as $player)
    <tr>
        <td>{{ $player['id'] }} </td>
        <td>{{ $player['fname'] }} </td>
        <td>{{ $player['lname'] }} </td>
        <td>{{ $player['gender'] }} </td>
        <td>{{ $player['position'] }} </td>
        <td>{{ $player['address1'] }} </td>
        <td>{{ $player['address2'] }} </td>
        <td>{{ $player['district_id'] }} </td>
        <td>{{ $player['pin_code'] }} </td>
        <td>{{ $player['photo'] }} </td>
        <td>{{ $player['phone'] }} </td>
        <td>{{ $player['email'] }} </td>
        <td>{{ $player['aadhar'] }} </td>
    
        <td>
            <a href={{"delete/".$player['id'] }}>Delete </a>&nbsp
            <a href={{"edit/".$player['id'] }}>Edit </a>
        </td>
        
    </tr>
    @endforeach
    <table border="1">
        <th><a style="color:blueviolet" href="view2">Add</a></th>
    </table>

</table>