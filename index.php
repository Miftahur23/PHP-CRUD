

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
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
                <td>1</td>
                <td>Siam</td>
                <td>siam@gmail.com</td>
                <td>Bangladesh</td>
                <td>
                    <a href="#" class="edit_btn" >Edit</a>
                    <a href="#" class="del_btn" >Delete </a>
                </td>
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