<?php
//1
$name="Ahmed Naeem";
$s="Hello, ";
echo $s.$name,"<br>","<br>";
//-----------------------------
//2
$x=40;
$y=20;
if($x>=1 && $y<=(pow(10,5)))
{
    echo $x," ","+"," ","$y","=",$x+$y,"<br>";
    echo $x," ","*"," ","$y","=",$x*$y,"<br>";
    echo $x," ","-"," ","$y","=",$x-$y,"<br>";
}
//-----------------------------
//3
$a=1;
$b=2;
$c=3;
$d=4;

if($a>=(pow(-10,5)) && $b>=(pow(-10,5)) && $c>=(pow(-10,5)) && $d>=(pow(-10,5)) && $a<=(pow(10,5)) && $b<=(pow(10,5)) && $c<=(pow(10,5)) && $d<=(pow(10,5)))
{
$x=($a*$b)-($c*$d);
echo "<br>", "Difference = ",$x;
}
//-----------------------------
//4
$n=183;
$m=204;
if($n>=0 && $m<=(pow(10,8)))
{
    echo "<br>","<br>",($n%10)+($m%10);
}
//-----------------------------
//5
$X=6569;
if($X>999 && $X<=9999)
{
    if(((int)($X/1000))%2==0)
    {
        echo "<br>","<br>","EVEN";
    }else{
        echo "<br>","<br>","ODD";
    }
}
//-----------------------------
//6
$A=23;
$B=3;
$K=2;
if(($A%$K==0)&&($B%$K==0))
{
    echo "<br>","<br>","BOTH";
}elseif(($A%$K==0)&&($B%$K!=0))
{
    echo "<br>","<br>","Memo";
}elseif(($A%$K!=0)&&($B%$K==0))
{
    echo "<br>","<br>","Momo";
}else{
    echo "<br>","<br>","No One";
}
//-----------------------------
//7
$num=64;
if($num>=10 && $num<=99)
{
    if(($num%10)>((int)($num/10)))
    {
        if(($num%10)%((int)($num/10))==0)
        {
    echo "<br>","<br>","YES";
        }
        else{
                echo "<br>","<br>","NO";

        }
    }else{
         if(((int)($num/10))%($num%10)==0)
        {
    echo "<br>","<br>","YES";
        } else{
                echo "<br>","<br>","NO";

        }
    }
}
//-----------------------------
//------------------------------------------------------------------------------------------Tasks from slides-------------------------------------------------------------------

//1
define("myConst",3.141592653);
$R=5;
if($R>=1 && $R<=100)
{
    $Area=myConst*($R*$R);
    echo"<br>","<br>",$Area;

}
//-----------------------------

//2
$a=20;
$b=18;
if($a>=0 && $b<=100)
{
if($a>=$b)
{
        echo "<br>","<br>","YES";

}else{
                    echo "<br>","<br>","NO";

}
}
//-----------------------------

//3
$g=8;//9
$f=2;//3
if($g%$f==0)
{
        echo "<br>","<br>","Multiples";

}else{
                    echo "<br>","<br>","No Multiples";

}
//-----------------------------

//4
$A=12;
$B=15;
$C=10;
$max=0;
if($A>$B && $A>$C)
{
$max=$A;
}elseif($B>$A && $B>$C)
{
    $max=$B;
}elseif($C>$A && $C>$B)
{
        $max=$C;
}

$min=0;

if($A<$B && $A<$C)
{
$min=$A;
}elseif($B<$A && $B<$C)
{
    $min=$B;
}elseif($C<$A && $C<$B)
{
        $min=$C;
}

echo"<br>","<br>",$min," ",$max;
//-----------------------------

//5
$line='a';

$ascii = ord($line);

if ($ascii >= 48 && $ascii <= 57) {
    echo "<br>","<br>","IS DIGIT";
} elseif ($ascii >= 65 && $ascii <= 90) {
    echo "<br>","<br>","ALPHA<br>";
    echo "IS CAPITAL";
} elseif ($ascii >= 97 && $ascii <= 122) {
    echo "<br>","<br>","ALPHA<br>";
    echo "IS SMALL";
}
//-----------------------------

//6
$q=130;
$w=20;
$e=10;
$max=0;
if($q>$w && $q>$e)
{
$max=$q;
}elseif($w>$q && $w>$e)
{
    $max=$w;
}elseif($e>$w && $e>$q)
{
        $max=$e;
}

$min=0;
if($q<$w && $q<$e)
{
$min=$q;
}elseif($w<$q && $w<$e)
{
    $min=$w;
}elseif($e<$w && $e<$q)
{
        $min=$e;
}
$mid=0;
if($q<$max && $q>$min)
$mid=$q;
if($w<$max && $w>$min)
$mid=$w;
if($e<$max && $e>$min)
$mid=$e;

    echo "<br>","<br>",$min," ",$mid," ",$max," ";

//-----------------------------

//7
$letter='A';
$letter=strtolower($letter);
if($letter=='a' ||$letter=='e'||$letter=='i'||$letter=='o'||$letter=='u')
{
    echo "<br>","<br>","vowel";
}else{
    echo "<br>","<br>","consonant";
}

//-----------------------------
?>