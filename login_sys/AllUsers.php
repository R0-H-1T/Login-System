



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
        h1{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 200;
        }
        p{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 200;
        }
        .details{
            display:flex;
            justify-content:center;
            background-color:aliceblue;
        }
        .d1{
            justify-content:center;
            width:500px;

            
        }
    </style>
</head>
<body>
    <h1>All Users</h1>
    <div class="details">
        <div class="d1">
            <?php
                sleep(1);
                include('db_conn.php');

                $sql = "SELECT * FROM admin";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                        <!-- echo "<p><b>".$row['user_name']."</p>"."<br>"; -->
                        <p><b><a href="index.php"> <?php echo $row['user_name'];  ?>  </a></b></p>
                  <?php  }
                }else{
                    echo "No registered users";
                }
            ?>
        </div>
    </div>

<div class="btn" align="center"><a href="landingPage.html"><button>Back</button></a></div>


</body>
</html>
