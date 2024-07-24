<!-- <?php 
// $name = "";
// $email = "";
// $password = "";

// if (isset($_POST["registerbtn"])) {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];
// }

// if (!file_exists("data.json")) {
//     file_put_contents("data.json", "[]");
// }

// $file = file_get_contents("data.json");
// $data = json_decode($file, true);

// $user = array(
//     "name" => $name,
//     "email" => $email,
//     "password" => $password
// );

// array_push($data, $user);

// file_put_contents("data.json", json_encode($data));

// $fileo = file_get_contents("data.json");
// $dato = json_decode($fileo,true);


// $image = $_FILES["image"];
// if(!is_dir("images"))
// {
// mkdir("images");
// }
// move_uploaded_file($image["tmp_name"],"images/".$image["name"]);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
<th>
    <td>Name</td>
    <td>Email</td>
    <td>Password</td>
    <td>photo</td>
</th>
        </thead>
        <tbody>
            <!-- <?php
            // foreach ($dato as $user1) {
            //     echo "<tr>";
            //     echo "<td>" . $user1['name'] . "</td>";
            //     echo "<td>" . $user1['email'] . "</td>";
            //     echo "<td>" . $user1['password'] . "</td>";
            //     echo "<td><img src=" './images/' . $image['name'] "  width='100' height='100'></td>";
            //     echo "</tr>";
            // }
            ?> -->
        <!-- </tbody>
    </table>
</body>
</html>  -->

<?php 
$name = "";
$email = "";
$password = "";

if (isset($_POST["registerbtn"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $image = $_FILES["image"];
    if (!is_dir("images")) {
        mkdir("images");
    }
    $image_path = "images/" . basename($image["name"]);
    move_uploaded_file($image["tmp_name"], $image_path);

    if (!file_exists("data.json")) {
        file_put_contents("data.json", "[]");
    }

    $file = file_get_contents("data.json");
    $data = json_decode($file, true);

    $user = array(
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "image" => $image_path
    );

    array_push($data, $user);

    file_put_contents("data.json", json_encode($data));
}

$fileo = file_get_contents("data.json");
$dato = json_decode($fileo, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dato as $user1) {
                echo "<tr>";
                echo "<td>" . $user1['name'] . "</td>";
                echo "<td>" . $user1['email'] . "</td>";
                echo "<td>" . $user1['password'] . "</td>";
                echo "<td>";
                echo "<img src='" . $user1['image'] . "' alt='User Image' width='100' height='100'>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
