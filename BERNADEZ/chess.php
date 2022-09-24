<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>*Chess Board using Nested For Loop*</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
            echo "</tr>";
    }
          ?>

          
  </table>

  <section>
  <h3>*Function of an array in descending order*</h3>
  <!-- for function of an array in descending order -->
  
  <!-- sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key -->
    <h4>For Strings </h4>
    <?php
    $classmates = array("Joann", "Jovanie", "Julecenio", "Charebel");
    rsort($classmates);// output will be alphabetical in descending order

    $cmlength = count($classmates);
    for($x = 0; $x < $cmlength; $x++) {
        echo $classmates[$x];
        echo "<br>";
        }
        ?>
    <h4>For Numerical</h4>

    <?php
    $numbers = array(10, 45, 2, 56, 11);
    rsort($numbers);

    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
    }
    ?>

  </section>
    <h3>*Multiplication Table*</h3>
  <table align="center"  border='5px' width="100%" >
    <?php
    $num = 10;
    for($num1 = 1; $num1 <= 10; $num1++){	
        echo "<tr>";
	
	for($num2 =1; $num2 <= $num; $num2++){
		$multiplication_table = ($num1 * $num2);
		echo "<td >$num2  x $num1 =  $multiplication_table </td>";
    }
	
	echo "<tr/>";
    }
    ?>
  </table>

  <h3>*For Sorting Associative array*</h3>
  
  <section>
  <h4>Ascending order by value</h4>
  <?php
    $testscore = array("Sophia"=>"31", "Jacob"=>"37", "William"=>"39", "Ramesh"=>"40");
    asort($testscore);

    foreach($testscore as $name => $score) {
        echo "Key=" . $name . ", Value=" . $score;
        echo "<br>";
    }
    echo"<h4>Ascending order by key </h4>";
    ksort($testscore);
    
    foreach($testscore as $name => $score) {
        echo "Key=" . $name . ", Value=" . $score;
        echo "<br>";
    }

    echo"<h4>Descending order by value </h4>";
    arsort($testscore);
    
    foreach($testscore as $name => $score) {
        echo "Key=" . $name . ", Value=" . $score;
        echo "<br>";
    }
    
    echo"<h4>Descending order by key </h4>";
    krsort($testscore);
    
    foreach($testscore as $name => $score) {
        echo "Key=" . $name . ", Value=" . $score;
        echo "<br>";
    }

    ?>
  </section>
  
  <section>
    <?php
    for ($i=1; $i<=50; $i++){
	//For multiples of three, print "Fizz"
	    if ($i % 3 == 0){
		    if ($i % 5 != 0){
			    echo "Fizz<br>";
		    }
		//For numbers which are multiples of both three and five, print "FizzBuzz"
		    else {
			    echo "FizzBuzz<br>";
		    }
	    }
	//For multiples of five, print "Buzz"
	    elseif ($i % 5 == 0)
	    {
		    echo "Buzz<br>";
	    }
	    else {
		    echo $i . "<br>";
	    }	
    }
    ?>
	  <?php
    function sampleFunction ($num1, $num2){
        
     return ($num1 == 30) || ($num2 == 30) || ($num1 + $num2 ==30 );
    }

echo var_dump(sampleFunction(15,13)) ;
echo var_dump(sampleFunction(15,15)) ;
echo var_dump(sampleFunction(0,30)) ;
  </section>
  </body>
  </html>

  
