<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="home.php" method="post">
<label for="email">email</label>
<input type="email" name="email" required>
<label for="pass">Password</label>
<input type="pass" name="pass" required>
<button>submit</button>

    <?php
   echo"<h1>".@$_GET['error'] ."<h1>";
    ?>
</form>
</body>
</html>