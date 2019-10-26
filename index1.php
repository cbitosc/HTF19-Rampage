<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            background-color:aquamarine;
        }
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }
        .hr{
            background-color:aquamarine;
        }
        .menu{
            width: 100%;
            height: 80px;
            display: block;
            background-color: #101010;
        }
        .innerheader{
            width:1000px;
            height: 100%;
            display:block;
            margin:0 auto;
        }
        .logo{
          height: 100%;
            display: table;
            float:left;
        }
        .logo h1{
            color:white;
            height: 100%;
            display: table-cell;
            font-family: 'Montserrat';
            vertical-align: middle;
            font-size: 32px;
        }
        .logo h1 span{
            font-weight: 800;
        }
        .navigation{
            float: right;
            height: 100%;
        }
        .navigation a{
            height: 100%;
            float:right;
            display: table;
            padding: 0px 20px;
        }
        .navigation a li{
            display:table-cell;
            vertical-align: middle;
            color:white;
        }
        .hello{
             width:200px;
            height:100px;
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
        .head2{
             width:200px;
            height:100px;
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
        .may{
            color:antiquewhite;
        }
        .may2{
            color:antiquewhite;
        }
        .hello input[type="submit"]{
           background-color:red;
        }
        .hello input[type="submit"]{
           background-color:red;
        }
        .hyper input[type="submit"]{
            background-color: red;
        }
        .hyper{
              width:500px;
            height:200px;
            background-color: rgba(0,0,0,0.5);
            margin:0 auto;
            margin-top: 40px;
            padding-top:10px;
            padding-left: 50px;
            color:white;
            font-weight:border;
        }
        
    </style>
</head>
<div class="hr">
<body>
    <div class="menu">
       <div class="innerheader">
         <div class="logo">
           <h1>life<span>SAVER</span></h1>
           </div>
        <ul class="navigation">
              <a href="index5.php"><li>logout</li></a>
               <a> <li><?php 
session_start();
echo"Hello".$_SESSION['username'];
?></li></a>
           
            <a href="index1.php"><li>contact</li></a>
            <a href="index2.php"><li>updates</li></a>
            <a href="index3.php"><li>about us</li></a>
            <a href="index4.php"><li>home</li></a>
            
        </ul>
        </div>
        </div>
        <div>
            
        <div class="hello">
        <br><br>
         <form action="details.php" method="post">
             <input type="text" name="pq" placeholder="search by location.."/><br><br>
             <input type="submit" value="submit">
         </form>
     </div>
      
    
    <div class="hyper">
    if you want to suggest anything you can suggest by uploading in a word,pdf format 
    thank you:)<br><br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit">
         
                </form>
    </div>
</body>
</div>
</html>

