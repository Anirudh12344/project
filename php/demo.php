<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registation form </h1>
    <form action="#" method="post">
        <label for="#">
           User name
        </label>
        <input type="text" name="txtName">
        <label for="#">
            password
        </label>
        <input type="password" name="txtpass">
        <Select name="optrole">
            <option value="0">Select nothing </option>
            <option value="1">Admin</option>
            <option value="2">Student</option>
            <option value="3">Teacher</option>

        </select>
        <br><br>
        <button name="Submit" value="Submit">submit</button>
    </form>
<br>
---------------------------------------------------------------------------
<br>
<?php
if(isset($_POST['Submit']))
{
    $name=$_POST['txtName'];
    $pass=$_POST['txtpass'];
    $role=$_POST['optrole'];
    echo"name is ".$name."<br>";
    echo"pass is ".$pass."<br>";
    echo"role is ".$role."<br>";
}
else{
    echo"submit not clicked";
}

?>
<br>
-----------------------------------------------------------------------------
<br>


    <h2>Register Student list</h2>
    <table border="1">
        <tr>
            <td>S no.</td>
            <td>Name:-</td>
            <td>Password:-</td>
            <td>role:-</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>
                <input type="button" value="Edit">
                <input type="button" value="Submit">

            </td>
        </tr>
    </table>
</body>
</html>