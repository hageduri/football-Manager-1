<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Test1 Login </title>
    </head>
    <body>
        

        <div align='center'>
        <h1>Test1 Login</h1>
            <form action="{{ url('add1') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 10px;">
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <div style="padding: 10px;">
                    <label>District Id</label>
                    <input type="number" name="district_id">
                </div>

                <div style="padding: 10px;">
                    <input type="submit">
                </div>
            </form>

        </div>
    </body>
</html>