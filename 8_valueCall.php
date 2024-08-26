<?php
/* function calc($price, $tax)
{
    echo $total = $price + $tax;
}
$pricetag = 15;
$taxtag = 3;
calc($pricetag, $taxtag); */

/* function display($subject,$marks){
    echo "$subject -- $marks<br>";
}
display("PHP",99);
display("React",33);
display("DSA",10);
display("CP",0); */

/* $y=2;
if ($y-- == ++$y) {
    echo $y;
} */

/* function tv($string){
    echo $string;
    function b(){
        echo "ff";
    }
}
function b(){
    echo "ff";
}
b();
tv("sfds"); */

/* function mult(&$mat1,&$mat2,&$res){
    $N=4;
    for($i=0;$i<$N;$i++){
        for($j=0;$j<$N;$j++){
            $res[$i][$j]=0;
            for($k=0;$k<$N;$k++){
                $res[$i][$j]+=$mat1[$i][$k]*$mat2[$k][$j];
            }
        }
    }
}

$mat1=array(array(1,2,3,4),array(5,6,7,8),array(9,10,11,12),array(13,14,15,16));
$mat2=array(array(1,2,3,4),array(5,6,7,8),array(9,10,11,12),array(13,14,15,16));
$res=array(array(0,0,0,0),array(0,0,0,0),array(0,0,0,0),array(0,0,0,0));
mult($mat1,$mat2,$res);
print_r($res); */

/* function static_var(){
    static $num1=2;
    $num2=5;
    $num1++;
    $num2++;
    echo $num1." ".$num2;
}

static_var();
static_var();
static_var();
static_var();
static_var();
static_var(); */

$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$rows=count($a);
$cols=count($a[0]);
$t=array_fill(0,$cols,array_fill(0,$rows,0));

for ($i=0; $i < $cols; $i++) { 
    for ($j=0; $j < $rows; $j++) { 
        $t[$i][$j];
    }
}