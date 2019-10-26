<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        body{
            background-image: url(save2.jpg);
            background-size: cover;
        }
        .aa{
            width:300px;
            height:280px;
            background-color: rgba(0,0,0,0.5);
            margin:0 auto;
            margin-top: 40px;
            padding-top:10px;
            padding-left: 50px;
            border-radius: 15px;
            -webkit-border-radius:15px;
            -o-border-radius:15px;
            -moz-border-radius:15px;
            color:white;
            font-weight:border;
         }

        .aa input[type="text"]
        {
            width:200px;
            height:35px;
            border=0;
            border-radius: 5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
            
        }
        
        .aa input[type="password"]
        {
            width:200px;
            height:35px;
            border=0;
            border-radius: 5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
            
        }
        .aa input[type="submit"]
        {
         background-color: red;
        }
    </style>
</head>
<body>
  <div class="aa">
   <h2>Login</h2>
   <form method="post" action="valid.php" >
    <input type="text" name="user" placeholder="please Enter username.."><br><br>
    <input type="password" name="password" placeholder="please enter password..."><br><br>
    not registered yet?:<a href="reg.php">register now!</a><br><br> 
    <input type="submit" value="Login">
   </form>
 </div>
</body>
</html>