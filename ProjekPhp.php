<html>
    <body>
	<hr>
	Operator
	<hr>
      <?php
      $x=10;
      $y=5;
      
      echo $x + $y;	  echo"<br>";
	  echo $x - $y;	  echo"<br>";
	  echo $x * $y;	  echo"<br>";
	  echo $x / $y;	  echo"<br>";
      //echo $s $y dan echo <br>;
	  
	  echo"<hr>";
	  echo "Comparison Operator";
	  echo "<hr>";
	  $perbandingan = $x == $y;	var_dump ($perbandingan); echo "<br>";
	$perbandingan = $x === $y;	var_dump ($perbandingan); echo "<br>";
	$perbandingan = $x != $y;	var_dump ($perbandingan); echo "<br>";
	$perbandingan = $x <> $y;	var_dump ($perbandingan); echo "<br>";
	$perbandingan = $x !== $y;	var_dump ($perbandingan); echo "<br>";
	
	echo"<hr>";
	  echo"Logical Operator";
	  echo "<hr>";
	if ($x == 10 and $y == 5) {
    echo "kahiji!";
	}
	else
	echo "kadua!";
	echo"<hr>";
	  echo"The if Statement";
	  echo "<hr>";
	  $t=date ("H");
	if ($t <"20") {
	echo "Beurangkeneh";
	echo "<hr>";
	echo "<hr>";
	if ($x > $y) {
		echo "x lebih besar";echo "<br>";
	} else if ($x!=0); 
		echo"x tidak sama 0";
	}else {
	echo "x=0";
	}
	echo"<hr>";
	  echo"Switch";
	  echo "<hr>";
	  
	$Menu_Makan = "Nasi Padang";
	switch ($Menu_Makan) {
    case "Nasi Goreng":
        echo "Menu Makan hari ini Nasi goreng!";
        break;
    case "Nasi Rames":
        echo "Menu Makan hari ini Nasi Rames!";
        break;
    case "Nasi Padang":
        echo "Menu Makan hari ini Nasi Padang!";
        break;
    default:
        echo "Menu Makan hari ini Nasi Goreng, Nasi Rames, nor NasiPadang!";
	}
	echo"<hr>";
	  echo"Loop";
	  echo "<hr>";
	  for ($x = 0; $x <=10; $x++){
	  echo "The number is : $x <br>";
	  }
	  echo "<hr>";
	$x=1;
	  
	while($x <= 5) {
	echo "The number is: $x <br>";
	  $x++;}
	  ?>
    </body>
</html>
