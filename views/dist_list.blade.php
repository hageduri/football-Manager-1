<div align="center">

    <h1>District Lists</h1>

    <table border="1">
        
        <tr>
            {{-- <td>Id</td> --}}
            <td>District Name</td>
            <td>District Id</td>
            <td>Actions</td>   
        </tr>
        
        

        @foreach ($district_ids as $dist_id)
        <tr>
            {{-- <td>{{ $dist_id['id'] }} </td> --}}
            <td>{{ $dist_id['name'] }} </td>
            <td>{{ $dist_id['district_id'] }} </td>
            <td>
                <a href={{"delete/".$dist_id['id'] }}>Delete </a>&nbsp
                <a href={{"edit/".$dist_id['id'] }}>Edit </a>
            </td>
            
        </tr>
        @endforeach
        <table border="1">
            <th><a style="color:blueviolet" href="view1">Add</a></th>
        </table>

    </table>
</div>