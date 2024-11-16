<?php
if (isset($_POST['submit'])) {
    trim(htmlspecialchars(extract($_POST)));
    echo "<br>";
    echo $bg_color;
    setcookie("bg_color",$bg_color,time()+60*60*24*30);
    header("location: 11.php");


}else{
    header("location: 11.php");
}
echo "<br>";
 
 echo $_COOKIE['bg_color'];?>