
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <style>
        h1{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(74, 241, 186);
        }
    </style>
</head>
<body>

<?php
    session_start();
    include("db_conn.php");

    $user_id = $_SESSION['id'];
    $sql = "DELETE FROM admin WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);

    if($result){ 
        if(session_destroy()){
            echo "<h1>"."Record deleted successfully!!!!"."</h1>"; ?>
            <a href="landingPage.html"><button>Home</button></a>
        <?php    // header( "Refresh:5; url=landingPage.html");
        }else{
            echo "cannot destroy session";
        }
        
    //    <script>Deleted User</script>
    }else{
        echo "Not deleted";
    }

    

?>
</body>
</html>


