<div align="center">
    <h1>Update District</h1>
    <form action="/dist_edit" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <input type="text" name="name" value="{{ $data['name'] }}">
        <input type="number" name="district_id" value="{{ $data['district_id'] }}">
        <button type="submit">Update</button>
    </form>
</div>