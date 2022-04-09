<?php
    session_start();
    include("db_conn.php");




    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){  ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
            <style>
                h1{
                    text-align: center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 200;
                }
                h2{
                    text-align:center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 200;

                }
                .btns{
                    display:flex;
                    justify-content:center;

                }
                button{
                    margin-left: 10px;

                }
                tr{
                    margin-top:10px;
                }

            </style>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <h1>Hello <?php echo $_SESSION['user_name']; ?></h1>


            <h2>Your Details -</h2>

            <?php
                $user_id = $_SESSION['id'];
                $sql = "SELECT * FROM admin WHERE id = $user_id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            <div style="display:flex;justify-content:center; background-color:aliceblue;"class="details">
                <table>
                    <tr>
                        <td>Username:</td> 
                        <td><?php  echo $row['user_name'];  ?></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><?php  echo $row['email'];  ?></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><?php  echo $row['address'];  ?></td>
                    </tr>
                    <tr>
                        <td>Contact: </td>
                        <td><?php  echo $row['contactno'];  ?></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><?php  echo $row['password'];  ?></td>
                    </tr>
                </table>
            </div>

            <?php

                $user_id = $_SESSION['id'];
                $sql = "SELECT * FROM admin WHERE id = $user_id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if(!$row['address'] && !$row['contactno'] && !$row['email']){
                    ?>
                    <a href="#"><button>Add other details</button></a>
                <?php }?>
                <div class="btns" style="background-color: aliceblue;">
                    <div class="btn" style="margin-top:15px; margin-bottom:10px">
                    <a href="landingPage.html"><button>Logout</button></a>
                    <a href="edit.php"><button>Edit Details</button></a>
                    <a href="delete.php"><button>Delete</button></a>
                    </div>
                    
                </div>
            
        </body>
        </html>
    <?php 
    
    }else{
        header('location: index.php');
        exit();
    }

?>