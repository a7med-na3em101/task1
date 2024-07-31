<?php
$emails=$_POST["email"];
$passs=$_POST["pass"];

$file=file_get_contents("data.json");
$file=json_decode($file,true);
foreach($file as $user)
{
    if($emails==$user["email"] && $passs==$user["password"])
    {
        echo "welcome",$user["name"],"to home page";
        die;
    } 
}
echo "ahmed";
header('location: login.php?error=your email or password might be wrong');
exit();
?>