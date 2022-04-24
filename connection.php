

<?php
        //initial variables
        $id = 0; 
        $name = "";
        $email = "";
        $country = "";

        //connect to database
        $db = mysqli_connect('localhost' , 'root' , 'Siam@2022' , 'crudphp');

        //when submit button is clicked
        if (isset($_POST['submit'])) {
            
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];

        $query = "INSERT INTO users (name, email, country) VALUES ('$name', '$email', '$country')";
        mysqli_query($db, $query);

        //redirecting to previous page
        // header('location : index.php');
        header('Location: ' . $_SERVER['HTTP_REFERER']); 

        }

?>