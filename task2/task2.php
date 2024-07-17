<?php
echo "<br> <==1==> <br>";
//1
$n=5;
for($i=1;$i<=$n;$i++)
{
    echo $i ,"<br>";
}
//--------------------------
echo "<br> <==2==> <br>";
//2
$N=5;
for($i=1;$i<=$N;$i++)
{
    if($i%2==0)
    echo $i ,"<br>";
}
//--------------------------
echo "<br> <==3==> <br>";
//3
$a=[1,8,5,7,5];
$max=0;
for($i=0;$i<count($a);$i++)
{
    if($a[$i]>$max)
    {
$max=$a[$i];
    }
}
echo $max ,"<br>";
//--------------------------
echo "<br> <==4==> <br>";
//4
$p = 7;
$isPrime = true;

for ($i = 2; $i < $p; $i++) {
    if ($p % $i == 0) {
        echo "No<br>";
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "Yes<br>";
}
//--------------------------
echo "<br> <==5==> <br>";
//5
$t = 12121;
$origin = $t;
$reverse= 0;

while ($t != 0) {
    $digit = $t % 10;
    $reverse = $reverse* 10 + $digit;
    $t = (int)($t / 10);
}

if ($origin == $reverse) {
    echo "Yes<br>";
} else {
    echo "No<br>";
}
//--------------------------
echo "<br> <==6==> <br>";
//6
$num=7;
for ($i = 1; $i <=$num; $i++)
{
    if($num%$i==0)
    {
        echo $i , "<br>";
    }
}
//--------------------------
echo "<br> <==7==> <br>";
//7
$A = 4;
$B = 1000;
$Lucky= false;

for ($i = $A; $i <= $B; $i++) {
    $num = $i;
    $isLucky = true;
    
    while ($num > 0) {
        $digit = $num % 10;
        if ($digit != 4 && $digit != 7) {
            $isLucky = false;
            break;
        }
        $num = (int)($num / 10);
    }
    
    if ($isLucky) {
        echo $i . " ";
        $Lucky = true;
    }
}

if (!$Lucky) {
    echo "-1";
}
//--------------------------
echo "<br> <==8==> <br>";
//8
$n = 4;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
//extra
for ($i = 0; $i <= $n; $i++) {
    for ($j = $i; $j <= $n; $j++) {
        echo "*";
    }
    echo "<br>";
}


?>