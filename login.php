<?php
session_start();
require_once "library/db.php";





if($_POST && $_POST['username'] != "" && $_POST['password'] != "")
{

    try{
        db::connect("local");
        $dotaz = db::queryOne("SELECT * FROM user WHERE login=? and password =?",$_POST['username'],$_POST['password']);

        if($dotaz){
            $_SESSION['login'] = $dotaz['login'];
            header('Location: index.php');
            exit();
        }
        else
        {
            throw new ErrorException("Uživatel nenalezen");
        }
    }
    catch (Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

}





?>
<html>

   <head>
       <title>Login Page</title>
       <link type="text/css" href="css/style.css">
   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box" value="<?= $_POST['username'] ?>" required/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" value="<?= $_POST['password'] ?>" required/><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>

</div>

</div>

</div>

</body>
</html>