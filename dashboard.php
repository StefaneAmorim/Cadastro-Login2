<?php
   session_start();
   if(empty($_SESSION)){
    print"<script>location.href='index.php'</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">EatMap</a>
        <?php
             print"Olá, " . $_SESSION["nome"];
             print" <a href='logout.php' class='btn btn-danger'>Sair</a> ";

         ?>
    </div>
   </nav> 


</body>
</html>
