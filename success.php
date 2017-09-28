<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
    <head>
        <title>Welcome <?php echo $_SESSION['name']; ?></title>
    </head>
    <body>
      You have Successfully Logged In<br>
       Name: <?php echo $_SESSION['name']; ?> <br>
       Email: <?php echo $_SESSION['email']; ?> <br>
       <form action="logout.php">
       <button type="submit">Logout</button>
       </form>
    </body>
</html>
