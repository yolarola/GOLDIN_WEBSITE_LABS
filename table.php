<!DOCTYPE html>
<?php
	//session_start();
		?>
 <?php
	function drawTable($cols, $rows, $color)
	{
		$tr=1;

		echo "<table id='red' border='1'>" ;

		while($tr<=$rows){
		  echo "<tr>" ; 
		  $td=1;
		  
		  while ($td<=$cols){
			echo "<td>".$tr*$td."</td>";
			$td++; 
		  }
		  echo "</tr>";
		  $tr++ ;
		}
		echo "<style> tr:nth-child(1){ background-color:$color; } </style>";
		echo "<style> td:nth-child(1){ background-color:$color; } </style>";
		echo "</table>" ; 
	} 
    
?>

		<div id="content">
		
			<!-- Таблица -->
		<div style="margin-bottom:50px;">
		<form action='' method="POST">
		<p>Cols: <input type="number" name="cols"  /></p>
		<p>Rows: <input type="number" name="rows"  /></p>
		<p>Color: <input type="color" name="color" /></p>
		<p><input type="submit" value="Boop" /></p>

		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<?php 
				drawTable($cols=$_POST['cols'],$rows=$_POST['rows'],$color=$_POST['color']);
					?>
		</div>
		</div>



</html>