
<?php
    session_start();
    include("db_conn.php");


    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM admin WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);




    // if($_SERVER['REQUEST_METHOD']=="POST"){
    
    //     function validate($data){
    //         $data = trim($data);
    //         $data = stripcslashes($data);
    //         $data = htmlspecialchars($data);
    //         return $data;
    //     }
    
    
    //     $uname = validate($_POST['username']);
    //     $password = validate($_POST['password']);
    //     $address = validate($_POST['address']);
    //     $email = validate($_POST['email']);
    //     $contactno = validate($_POST['contactno']);



    // }
?>

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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 200;
        }
        form{
            
            background-color: #d6fffe;
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
    <h1>Edit Details</h1>
    <div class="entform">
        <form action="update.php" method="POST">
            <section class="section">
                <div class="user_name"  style="margin-top: 25px">
                    <label for="username">Enter Username: </label><br>
                    <input type="text" name="username" id="username" value="<?php echo $row['user_name']?>" required>
                </div>
                <div class="e_mail" style="margin-top: 25px">
                    <label for="email">Enter Email: </label><br>
                    <input type="email" name="email" id="email" value="<?php echo $row['email']?>" required>
                </div>
                <div class="add_ress"  style="margin-top: 25px">
                    <label for="address">Enter Address:</label><br>
                    <input type="text" name="address" id="address" value="<?php echo $row['address']?>" required>
                </div>
                <div class="contact_no" style="margin-top: 25px">
                    <label for="contactno">Enter Contact No.:</label><br>
                    <input type="text" name="contactno" id="contactno" value="<?php echo $row['contactno']?>" required>
                </div>
                <div class="pass_code" style="margin-top: 25px; ">
                    <label for="password">Enter Password: <?php echo $row['password']?></label><br>
                    <input type="password" name="password" id="password" value="<?php echo $row['password']?>" required>
                </div>
                <div class="btn" style="margin-bottom: 10px; margin-top:15px">
                    <button type="submit">Submit</button>
                </div>
            </section>
        </form>
        <a href="home.php"><button>Back</button></a>
    </div>
</body>
</html>