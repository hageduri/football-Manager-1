<div align="center">

    <h1>Position Lists</h1>

    <table border="1">
        
        <tr>
            {{-- <td>Id</td> --}}
            <td>Position Name</td>
            <td>Position Id</td>
            <td>Actions</td>   
        </tr>
        
        

        @foreach ($positions as $pos)
        <tr>
            {{-- <td>{{ $pos['id'] }} </td> --}}
            <td>{{ $pos['name'] }} </td>
            <td>{{ $pos['position_id'] }} </td>
            <td>
                <a href={{"delete3/".$pos['id'] }}>Delete </a>&nbsp
                <a href={{"edit3/".$pos['id'] }}>Edit </a>
            </td>
            
        </tr>
        @endforeach
        <table border="1">
            <th><a style="color:blueviolet" href="view3">Add</a></th>
        </table>

    </table>
</div>