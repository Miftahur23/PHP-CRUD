<?php include('connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <table>
        <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
        </thead>


        <tbody>
            <?php while ($row = mysqli_fetch_array($data)) { ?>

                    <tr>
                        
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td>
                            <a href="#" class="edit_btn" >Edit</a>
                            <a href="#" class="del_btn" >Delete </a>
                        </td>
                    </tr>

            <?php } ?>
            
        </tbody>
    </table>

    

    <form method="post" action="connection.php" >
            <div class="input-group">
                <label>Name</label>
                <input type="name" name="name" value="">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="">
            </div>      
            <div class="input-group">
                <label>Country</label>
                <input type="text" name="country" value="">
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="submit" >Submit</button>
            </div>
	</form>
    
</body>
</html>