<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <?php require_once 'process.php';?>
        <?php 
        if (isset($_SESSION['message'])): ?>

        <div class="alert alert-<?=$_SESSION['msg_type']?>">
        
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
        <div class = "container">
        <?php
            $mysqli = new mysqli('localhost','root','','alazbreal') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM customers");
            //pre_r($result->fetch_assoc());
        ?>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>PhoneNumber</th>
                        <th>Email</th>
                        <th>isLead</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                    while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['phonenumber']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['lead']; ?></td>
                        <td>
                            <a href="admindashboard.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info">Edit</a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>"
                            class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>

        <?php
            function pre_r($array)
            {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>


    <div class ="container vh-100  w-25" >
        <div class="row justify-content-center h-100">
        <form action = "process.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber; ?>">
            </div>

            <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
            <label for="lead">Lead: </label>
            <select name="isLead" id="lead">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>

            <div class="form-group">
            <?php 
            if ($update == true):
            ?>
                <button type="submit" class= "btn btn-info" name="update">Update</button>
            <?php else: ?>
            <button type="submit" class= "btn btn-primary" name="save">Save</button>
            <?php endif; ?>
            </div>

        </form>
        </div>
    </div>
    </div>
    </body>
</html>