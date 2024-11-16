<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1 class="  text-center  text-danger   ">1st Problem</h1>

<table class="table">

 <?php
 //انا مش عارف ايه المشكله فى الكود اللى انا كتبه مش شغال
  /*  for ($i=1; $i <=8 ; $i++) { 
        echo "<tr>";
        for ($j=1; $j <=8 ; $j++) { 
            $x=$i+$j;
            if($x % 2==0){
                echo   "<td height=50px width=100px bgcolor=#FFFFFF></td>";
        
            }else{
              echo "<td height=50px width=100px bgcolor=#000000></td>";
            }
        echo "</tr>";
    }}*/
        for($row=1; $row<=8; $row++)
{
    echo "<tr>"; // Start a new table row
    
    // Inner loop for columns
    for($col=1; $col<=8; $col++)
    {
        // Calculate total sum of row and column indices
        $total = $row + $col;
        
        // Check if total is even or odd to determine cell color
        if($total % 2 == 0)
        {
            // If total is even, set cell background color to white
            echo "<td height=50px width=100px bgcolor=#FFFFFF></td>";
        }
        else
        {
            // If total is odd, set cell background color to black
            echo "<td height=50px width=100px bgcolor=#000000></td>";
        }
    }
    
    echo "</tr>"; // End the table row
}
 ?>

</table>
</body>
</html>