<div align="center">
    <h1>Update Position</h1>
    <form action="/pos_edit" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <input type="text" name="name" value="{{ $data['name'] }}">
        <input type="number" name="position_id" value="{{ $data['position_id'] }}">
        <button type="submit">Update</button>
    </form>
</div>