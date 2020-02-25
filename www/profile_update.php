<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update Form</title>
</head>
<body style="color: rgb(204, 0, 0); font-size : 20px;">
    <?php
        require "header.php";
    ?>
    <h1>Enter Your Details Here :</h1><br><br><br>
    <form action="profile_update.php" method="post">
        Name Of Student :<input type="text" name = "StudentName"><br><br>
        Date Of Birth:<input type = "date" name="dob" placeholder="dd/mm/yyyy"><br><br>
        Year Of Joining :<input type="number" name = "Year"><br><br>
        Year Of Study:<input type = "number" name = "year"><br><br>
        Stream :<input type="text" name = "Stream"><br><br>
        Gender :
        Male <input name ="gender" type ="radio" >
        Female <input name ="gender" type ="radio" >
        Other <input name ="gender" type ="radio" ><br><br>
        Father's Name :<input type ="text" name = "FatherName"><br><br>
        Mother's Name :<input type ="text" name = "MotherName"><br><br>
        Father's Contact Number :<input type ="number" name = "FatherContact"><br><br>
        Mother's Contact Number :<input type ="number" name = "MotherContact"><br><br>
        <button type="submit" style = "color : white; background-color : rgb(255, 80, 80);"><b>Submit</b></button>
    </form>
    <?php
        $StudentName = $_POST["StudentName"];
        $Year = $_POST["Year"];
        $Stream = $_POST["Stream"];
        $gender = $_POST["gender"];
        $FatherName = $_POST["FatherName"];
        $MotherName = $_POST["MotherName"];
        $FatherContact = $_POST["FatherContact"];
        $MotherContact = $_POST["MotherContact"];

    ?>
</body>
</html>
