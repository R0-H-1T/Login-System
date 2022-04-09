
<?php



include("db_conn.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    
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

    if(empty($uname)){
        header("location: register.php?error=Username is required");
        exit();
    }else if(empty($password)){
        header("location: register.php?error=Password is required");
        exit();
    }else if(empty($address)){
        header("location: register.php?error=Password is required");
        exit();
    }else if(empty($email)){
        header("location: register.php?error=email is required");
        exit();
    }else if(empty($contactno)){
        header("location: register.php?error=contactno is required");
        exit();
    }
    echo $uname."<br>".$password."<br>".$address."<br>".$email."<br>".$contactno."<br>";
    $sql = "INSERT INTO admin(user_name, password, email, address, contactno) values ('$uname', '$password', '$email', '$address', '$contactno')";
    $result = mysqli_query($conn, $sql);



    if($result){
        $succ =  "Records inserted successfully in the database" ;
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        sleep(2);
        header('location: home.php');
        exit();
    }else{
        $err =  "Error: " . $sql . "<br>" . mysqli_error($conn);
        exit();
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        h1{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 200;
        }
        form{
            
            background-color: aliceblue;
            margin-top:30px;
            width:600px;
            display:flex;
            justify-content: center;
        }
        label{
            text-align:center;
        }
        .entform{
            display:flex;
            justify-content: center;
        }
        .section{

        }
        p{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 200;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Welcome to the registerations page</h1>
    <div class="entform">
        <form action="#" method="POST">
            <section class="section">
                <div class="user_name"  style="margin-top: 25px">
                    <label for="username">Enter Username: </label><br>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="e_mail" style="margin-top: 25px">
                    <label for="email">Enter Email: </label><br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="add_ress"  style="margin-top: 25px">
                    <label for="address">Enter Address:</label><br>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="contact_no" style="margin-top: 25px">
                    <label for="contactno">Enter Contact No.:</label><br>
                    <input type="text" name="contactno" id="contactno" required>
                </div>
                <div class="pass_code" style="margin-top: 25px; ">
                    <label for="password">Enter Password: </label><br>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="btn" style="margin-bottom: 10px; margin-top:15px">
                    <button type="submit">Submit</button>
                </div>
            </section>
        </form>
            <a href="landingPage.html"><button>Back</button></a>
        


        <!-- <footer>
            <p> </p>
        </footer> -->
    </div>
</body>
</html>