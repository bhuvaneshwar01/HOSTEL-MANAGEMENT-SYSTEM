<!DOCTYPE html>
<html>
    <head>
        <title>Room edit</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <table style="width: 100%; height: 5%;border: 2px solid black;text-align: center;">
            <tr>
                <td class="logo" ><img src="download.jfif"></td>
                <td class="heading"><h1>COLLEGE OF ENGINEERING - GUINDY</h1><h4>Anna University, Chennai</h4></td>
                <td class="logo" ><img src="CEGlogo.jpg"></td>
            </tr>
        </table><br><br>
        <button class="back" onclick="document.location.href='admin.html'";>
            BACK
        </button>
        <form action="room_upd.php" method="POST">
            <center>
                <table class="form_table">
                    <tr>
                        <td><label for="Room_id">Room id</label></td>
                        <td><input type="text" id="Room_id" name = "Room_id" /></td>
                    </tr>
                    <tr>
                        <td><label for="Furniture_id">Furniture id</label></td>
                        <td><input type="text" id="Furniture_id" name = "Furniture_id" /></td>
                    </tr>
                    <tr>
                        <td><label for="Capacity">Capacity</label></td>
                        <td><input type="number" id="Capacity" name = "Capacity" /></td>
                    </tr>
                    <tr>
                        <td><label for="Build_no">Hostel Build no.</label></td>
                        <td><input type="text" id="Build_no" name = "Build_no" /></td>
                    </tr>
                </table>
                <button class="mbutton">Update</button>
            </center>
        </form>
        <form action="room_disp.php">
            <button class="mbutton"> Room display</button>
        </form>
    </body>
</html>