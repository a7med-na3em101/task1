
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="POST" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" id="Name" name="name" required>
                <label for="Password">Password</label>
        <input type="password" id="Password" name="password" required>
                <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="photo">Your photo</label>
        <input type="file" id="photo" name="image" required>
        <button name="registerbtn">submit</button>
    </form>
</body>
</html>