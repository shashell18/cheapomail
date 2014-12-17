<!DOCTYPE html>
<html>
  <head>
    <title>Add User to Cheapo Mail</title>
    <link rel=stylesheet type="text/css" href="login.css">
    <script src="lib/jquery-1.11.1.js"></script>
    <script src=""></script>
  </head>
  
  <body style="text-align:center;">
  <h1>Add User</h1>
    <form id="logininfo" action="adduser.php" method="post"> 
      
       <p> <strong>First Name: </strong> <input type="text" id ="firstname" name="firstname" class="textfield" required> </p>
        <p><strong>Last Name: </strong> <input type="text" id ="lastname" name="lastname" class="textfield" required> </p>
       <p> <strong>Username: </strong> <input type="text" id ="username" name="username" class="textfield" required> </p>
       <p> <strong>Password: </strong> <input type="password" id ="password" name="password" class="textfield" required> </p>
        <p><input type="submit" id="submit" value="Submit"></p>
  
    </form>
          <a href="logout.php"><input type="button" value="Logout"></a>
     
  </body>
</html>