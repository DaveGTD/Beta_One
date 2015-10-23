<html>
	<head>
	</head>
	
	
	<body>
		
		<?php
			
			function maketable($query, $fieldarray)
			{
				//count number of columns
				 $columns = count($fieldarray);
				 
				 $conn = mysqli_connect('localhost', 'root', 'root', 'beta');
				 if(!$conn) 
				 {
				 	die("Connection failed: " . mysqli_connect_error());
				 }
				 
				 $result = mysqli_query($conn, $query);
				 $itemnum = mysqli_num_rows($result);
				 if($itemnum > 0)
				 { 
						do
					 	{   
							 echo "< tr >" ;
							 for($x = 0; $x < $columns; $x++)
							 {
							 	echo "< td >" .$items[$fieldarray[$x]]. "< /td >" ;
			   				 }
			   				 echo "< /tr >" ;
			  			}
			  			while($items = mysqli_fetch_assoc($result));
			 	 }
			 }
			
			
			echo "< table >";
			$fieldarray = array('row_num', 'id', 'name', 'title', 'salary', 'start_date', 'x', 'y');
			maketable("SELECT * FROM employees", $fieldarray);
			echo "< /table >";
		?>
		
	</body>
	
</html>