<!DOCTYPE html>
<html>
    <head>
        <title>User Dashboard</title>
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>

    <body>
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
    </body>
</html>