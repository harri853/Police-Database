<?php
// Check if the user is logged in, if not then redirect him to login page
require_once "src/helpers/login_check.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="src/css/default.css">
</head>
<body>
<?php include_once 'src/navbar.php'?>


    <div class="container">
        <h2>People</h2>
        <p>Please enter the name or licence of the person you're looking for.</p>
        <form action="src/people_lookup.php" method="get">
            <div>
                <label>Name</label>
                <input type="text" name="people_name" value="">
            </div>
            <div  >
                <label>Licence</label>
                <input type="text" name="people_licence">
            </div>
            <div>
                <input type="submit" class="submit-btn" value="Search">
            </div>
        </form>
    </div>

    <div class="container">
        <h2>Vehicles</h2>
        <p>Please enter the licence plate of the vehicle you're looking for.</p>
        <form action="src/vehicle_lookup.php" method="get">
            <div>
                <label>Licence plate</label>
                <input type="text" name="vehicle_licence" value="">
            </div>
            <div>
                <input type="submit" class="submit-btn" value="Search">
            </div>
        </form>
    </div>
</body>
</html>
