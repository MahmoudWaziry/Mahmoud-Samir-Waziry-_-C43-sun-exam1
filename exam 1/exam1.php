<?php
/*
*****************
***first problem
*****************
*/
echo "1)-";
$num1 = 20;
$num2 = 10;
switch ($num1 <=> $num2) {
    case 1:
        echo "the greater number is" . $num1;
        break;
    case -1:
        echo "the greater number is" . $num2;
        break;
    default:
        echo "the numbers are equal";
}
echo "<hr>";
/*
*****************
******2nd problem
*****************
*/
echo "Q2)-<br>";
//first shape
for ($i=1; $i <=5 ; $i++) { 
    for ($j=5; $j >$i ; $j--) { 
        echo "&nbsp";
    }
    for ($x=0; $x <$i ; $x++) { 
        echo "*&nbsp";
    }
    echo "<br>";
}
$y=0;
for ($i=4; $i >0 ; $i--) { 
    for ($j=0; $j <=$y ; $j++) { 
        echo "&nbsp";
    }
    for ($x=0; $x <$i ; $x++) { 
        echo "*&nbsp";
    }
    echo "<br>";
    $y++;
}
echo "<br>";
//second shape
for ($i=1; $i <=5 ; $i++) { 
  
    for ($x=0; $x <$i ; $x++) { 
        echo "*&nbsp";
    }
    echo "<br>";
}
for ($i=4; $i >0 ; $i--) { 
  
    for ($x=0; $x <$i ; $x++) { 
        echo "*&nbsp";
    }
    echo "<br>";
    
}
echo "<br>";
//third shape
for ($i=1; $i <=5 ; $i+=2) { 
  
    for ($x=0; $x <$i ; $x++) { 
        echo "*&nbsp";
    }
    echo "<br>";
}
$z=0;
for ($i=4; $i >=0 ; $i-=2) { 
  
    for ($x=$z; $x <=$i ; $x+=2) { 
        echo "*&nbsp";
    }
    echo "<br>";
    $z++;
}
/*
*****************
******3rd problem
*****************
*/
echo "Q3)-";
$array = [2,4,3,1,6,7,5,8,0,9];
echo "<br>";
for ($i=0; $i <10 ; $i++) { 
    for ($j=0; $j <=count($array)-1 ; $j++) { 
        if ($i==$array[$j]) {
            $ascArray[]=$i;
        }
    }
}
echo "<pre>";
echo "ascending sort: <br> ";
print_r($ascArray);
echo "</pre>";
echo "<br>";
for ($i=9; $i >=0 ; $i--) { 
    for ($j=0; $j <=count($array)-1 ; $j++) { 
        if ($i==$array[$j]) {
            $descArray[]=$i;
        }
    }
}
echo "<pre>";
echo "descending sort: <br> ";
print_r($descArray);
echo "</pre>";
echo "<hr>";
/*
*****************
******4th problem
*****************
*/
echo "Q4)-";
echo "<br>";
$array4=[10,20,30,40,50,60,70,80,90,100];
$sum=array_sum($array4);
echo " the average =  ". $sum/count($array4);
echo "<hr>";
/*
*****************
******5th problem
*****************
*/
echo "Q5)-";
//هنا انا مش عارف ايه المشكله
$array5=[1,2,3,4,5,6,7,8,9,10,11,12];
for($i=0;$i<=count($array5)-1;$i++){
    if($array5[$i]%2==0){
        unset($array5[$i]);
    }
}
//anthor solution
echo "<pre>";
print_r($array5);
echo "</pre>";
echo "<br>";
$array52=[];
for ($i=1; $i <=10  ; $i++) { 
    if ($i%2!=0) {
      array_push($array52,$i)  ;
    }
}
echo "<pre>";
print_r($array52);
echo "</pre>";

echo "<hr>";
/*
*****************
******6th problem
*****************
*/
echo "Q6)-<br>";
$num1 = 10;
$num2 = 20;
$num3 = 30;
if ($num1 > $num2 && $num1 > $num3) {
    echo "the greatest number is" . $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "the greatest number is $num2";
} else {
    echo "the greatest number is $num3";
}
echo "<br>";
$array6=[10,20,30];// arrayانا حليت هنا بطريقه تانيه علشان انا مكنتش عارف انت تقصد ان مجموعه الارقام دى فى 
$maxNum=$array6[0];
for ($i=0; $i <=count($array6)-1 ; $i++) { 
    if($maxNum<$array6[$i]){
        $maxNum=$array6[$i];
    }
}
echo "the greatest number is" . $maxNum;
echo "<hr>";
/*
*****************
******7th problem
*****************
*/
echo "Q7)- <br>";
$dt = strtotime("2012-12-21");
echo"the date is:". date("Y-m-d", strtotime("+1 month", $dt));
echo "<hr>";
/*
*****************
******8th problem
*****************
*/
echo "Q8)-<br>";
echo "the pervious month was:". date('m', strtotime('-1 month'));
echo "<hr>";
/*
*****************
******9th problem
*****************
*/
echo "Q9)-<br>";
$pattern = '/[^\w]mahmoud/';
if (preg_match($pattern, 'i am mahmoud and i learn php')) {
    echo "'mahmoud' is present..."."\n";
} else {
    echo "'mahmoud' is not present..."."\n";
}
echo "<br>";
//another solution
$substr="mahmoud";
$str="i am mahmoud and i learn php";
$n=substr_count($str,$substr);
if ($n>=1) {
    echo $substr." " ."is found";
}else {
    echo $substr." "."is not found";
}
echo "<hr>";
/*
*****************
*****10th problem
*****************
*/
echo "Q10)-<br>";

function is_prime($x){
    if($x==2||$x==3){
        echo "this  prime number";
    } elseif($x%2==0 or $x%3==0){ 
        echo "this not prime number";
    }else{
        echo "this  prime number";
    }
}
is_prime(97);
echo "<hr>";

