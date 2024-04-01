<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Position Insert </title>
    </head>
    <body>
        

        <div align='center'>
        <h1>Create Positions</h1>
            <form action="{{ url('add3') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 10px;">
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <div style="padding: 10px;">
                    <label>Position Id</label>
                    <input type="number" name="position_id">
                </div>

                <div style="padding: 10px;">
                    <input type="submit">
                </div>
            </form>

        </div>
    </body>
</html>