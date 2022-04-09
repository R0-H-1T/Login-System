<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
            font-size: xx-large;
            text-align: center;
            
        }
        label{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
            font-weight: lighter;
            

        }
        section{
            display:flex;
            justify-content: center;
            background-color: aliceblue;
            /* width:500px;
            height:200px; */
            
        }
        .label1{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        h3{
            text-align:center;
        }
        .label3{
            margin-top:30px;
        }
        input{
            margin-top:8px;
        }
        
    </style>
</head>
<body>
    <!-- <h1>Hello</h1> -->
    <h1>Login</h1>
    
    <form action="login.php" method="POST">
        <section class="form1">
            <div class="label1">
                <div class="label2">
                <label for="uname" class="un">Username </label><br>
                <input type="text" name="uname" id="uname" placeholder="Username"><br>

                <div class="label3">
                <label for="pass" class="pwd">Password </label><br>
                <input type="password" name="password" id="pass" placeholder="Password"><br>
                </div>
            </div>
            <button type="submit" style="margin-top:25px">Submit</button>
        </section>
    </form>

    <h3><a href="landingPage.html">Back</a></h3>
    <h3><a href="AllUsers.php">All Users</a></h3>
</body>
</html>