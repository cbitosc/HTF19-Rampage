<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
       <link rel="stylesheet" type="text/css" href="styles.css">
        <style type="text/css">
        body{
            background-image: url(save2.jpg);
            background-size: cover;
        }
        .aa{
            width:300px;
            height:380px;
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
            width=100px;
            
        }
    </style>
</head>
<body>
  <div class="aa">
   <h2>register here</h2>
   <form method="post" action="regcon.php" onsubmit="return validate()" name="vform">
    <div>
    <input type="text" name="user" placeholder="please Enter username.."><br><br>
      <div id="name_error" class="val_error"></div>
        </div>
    <div>
    <input type="password" name="password" placeholder="please enter password..."><br><br>
        <div id="password_error" class="val_error"></div>
        </div>
        <div>
    <input type="text" name="phoneno" placeholder="please enter phoneno..."><br><br>
        <div id="phone_error" class="val_error"></div>
        </div>
        
    <input type="submit" value="register"><br>
   </form>
   </div>
</body>
</html>
<!---adding javascript---->
<script type="text/javascript">
  
    var user=document.forms["vform"]["user"];
    var password=document.forms["vform"]["password"];
    
    var name_error =document.getElementById("name_error");
    var password_error=document.getElementById("password_error");
    
    user.addEventListener("blur",nameVerify,true);
    password.addEventListener("blur",passwordVerify,true);
   
    
    function validate()
    {
        if(user.value ==""){
            name_error.textContent="Username is required";
            user.focus();
            return false;
        }
         if(password.value==""){
            password_error.textContent="password is required";
            password.focus();
             return false;
        }
    }
    
    
    function nameVerify(){
        if(user.value!="")
            {
                user.style.border="1px solid red";
                name_error.innerHTML="";
                return true;
            }
        
    }
    function passwordVerify()
    {
        if(pass.value!="")
            {
                 pass.style.border="1px solid red";
                password_error.innerHTML="";
                return true;
            }
    }
    
</script>