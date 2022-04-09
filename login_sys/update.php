
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
        <style>
            h1{
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: rgb(74, 241, 186);
            }
            h2{
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: rgb(255, 116, 116);
                
            }
        </style>
    </head>
    <body>
        
    


<?php
    session_start();

    include("db_conn.php");

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $uname = validate($_POST['username']);
    $password = validate($_POST['password']);
    $address = validate($_POST['address']);
    $email = validate($_POST['email']);
    $contactno = validate($_POST['contactno']);

    $user_id = $_SESSION['id'];

    $sql = "UPDATE admin SET user_name = '$uname', password = '$password',address = '$address',email = '$email',contactno = '$contactno' where id = $user_id";
    $result = mysqli_query($conn, $sql);

    if($result){
        // sleep(2);
        echo "<h1>"."Record updated successfully"."</h1>";
        $sql = "SELECT * FROM admin WHERE user_name = '$uname' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['user_name'] = $row['user_name']; ?>
        <a href="home.php"><button>Details</button></a>
     <?php   exit();
    } else {
      echo "<h2>"."Error: " . $sql . "<br>" . mysqli_error($conn)."<h2>"; ?>
      <a href="home.php"><button>Details</button></a>
   <?php //   header('location: edit.php');
    }

    



?>

</body>
    </html>