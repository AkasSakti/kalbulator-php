<!DOCTYPE html>
<html>
	<head>
		<title>Kalbulator</title>
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						// Calculate total
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'times')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						
						// Print total to the browser
						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
					
					} else {
						
						// Print error message to the browser
						echo 'Kudu Angka Bosskuh';
					
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="kalbulator.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">tambah</option>
		            <option value="minus">kurang</option>
		            <option value="times">kali</option>
		            <option value="divided by">bagi</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>