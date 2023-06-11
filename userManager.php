<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './DB_Conn.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register User</title>
        <link rel="stylesheet" type="text/css" href="userManagerStyle.css"/>
    </head>
    <body>
        <div class="registation">
        <form method="post" action="doRegister.php">

            Name : <input type="text" name="inName" id="inName" /></br></br>
            Birthday : <input type="date" name="inBirthday" id="inBirthday" /></br></br>
            Email : <input type="email" name="inEmail" id="inEmail" /></br></br>
            Type : <input type="text" name="inType" id="inType" /></br></br>
            Username : <input type="text" name="inUsername" id="inUsername" /></br></br>
            Password : <input type="password" name="inPassword" id="inPassword" /></br></br>
            <input type="submit" value="Register" class="button" />

        </form>
        </div>
        <div class="tablearea">
        <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Birthday</td>
                <td>Email</td>
                <td>Type</td>
                <td>Username</td>
                <td>Upload</td>
                <td>Delete</td>
            </tr>
            <?php
            $query = "SELECT id_user,name,birthday,email,type,username FROM users";
            $result = $connection->query($query);
            while ($row = $result->fetch_assoc()) {
                ?>
                <form method="post" action="updateUser.php">
                    <tr>
                        <td><input type="text" name="id_user" id="id_user" value="<?php echo $row["id_user"]; ?>" class="t1"/></td>
                        <td><input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>" class="t2"/></td>
                        <td><input type="date" name="birthday" id="birthday" value="<?php echo $row["birthday"]; ?>" class="t2"/></td>
                        <td><input type="email" name="email" id="email" value="<?php echo $row["email"]; ?>"/></td>
                        <td><input type="text" name="type" id="type" value="<?php echo $row["type"]; ?>" class="t3"/></td>
                        <td><input type="text" name="username" id="username" value="<?php echo $row["username"]; ?>" class="t2"/></td>

                        <td><input type="submit" value="Update" class="t3"/></td>

                        <td><a href="deleteUser.php?id=<?php echo $row["id_user"]; ?>">Delete</a></td>

                    </tr>
                </form>
            <?php } ?>
        </table>
        </div>

    </body>
</html>
