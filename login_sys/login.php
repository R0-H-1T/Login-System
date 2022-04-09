





<?php

    session_start();
    include ("db_conn.php");

    

    //if(isset($_POST['uname']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    //}

    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    if(empty($uname)){
        header("location: index.php?error=Username is required");
        exit();
    }else if(empty($password)){
        header("location: index.php?error=Password is required");
        exit();
    }
    
    $sql = "SELECT * FROM admin WHERE user_name = '$uname' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['user_name']===$uname && $row['password']===$password){
            echo "Logged In!!";
            $_SESSION['id'] = $row['id'];
            $_SESSION['user_name'] = $row['user_name'];
            header('location: home.php');
            exit();
        }else{
            header('location: index.php?error=Incorrect username or password');
            exit();
        }
    }else{
        // $row = mysqli_fetch_assoc($result);
        // echo $row["user_name"]." ".$row["password"];
        header('location: index.php?error=Incorrect username or password');
        exit();
    }

?>