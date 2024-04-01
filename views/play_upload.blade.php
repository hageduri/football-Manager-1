<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Create Player </title>
    </head>
    <body>
     
        <div align='center'>
            <h1>Create New Player</h1>
            <form action="{{ url('add2') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 10px;">
                    <label>First Name</label>
                    <input type="text" name="fname">
                </div>
                <div style="padding: 10px;">
                    <label>Last Name</label>
                    <input type="text" name="lname">
                </div>
                <div style="padding: 10px;">
                    <label>Gender</label>
                    <input type="number" name="gender">
                </div>
                <div style="padding: 10px;">
                    <label>Position</label>
                    <input type="number" name="position">
                </div>
                <div style="padding: 10px;">
                    <label>Address One</label>
                    <input type="textarea" name="address1">
                </div>
                <div style="padding: 10px;">
                    <label>Address Two</label>
                    <input type="text" name="address2">
                </div>
                <div style="padding: 10px;">
                    <label>District</label>
                    <input type="number" name="district_id">
                </div>
                <div style="padding: 10px;">
                    <label>Pin Code</label>
                    <input type="number" name="pin_code">
                </div>
                <div style="padding: 10px;">
                    <label>Photo</label>
                    <input type="text" name="photo">
                </div>
                <div style="padding: 10px;">
                    <label>Phone Number</label>
                    <input type="number" name="phone">
                </div>
                <div style="padding: 10px;">
                    <label>email</label>
                    <input type="email" name="email">
                </div>
                <div style="padding: 10px;">
                    <label>Aadhar Number</label>
                    <input type="number" name="aadhar">
                </div>


                <div style="padding: 10px;">
                    <input type="submit">
                </div>
            </form>

        </div>
    </body>
</html>