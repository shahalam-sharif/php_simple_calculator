<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<style>
			body {
				margin: 200px auto;
				padding: 0;
				width: 80%;
				text-align: center;
			}
			
			.post_form {
				margin: 50px 0;
			}
			.get_form {
				margin: 50px 0;
			}
		</style>
	</head>
	<body>
	
		<form action="calculator.php" method="post">
			<b>Value 1: </b>
			<input type="text" name="value1">
			<b>Value 2: </b>
			<input type="text" name="value2">
			
			<select name="operator" >
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			<select>
			
			<input type="submit" name="cal" value="Calculate">
			
		</form>
		
		<?php 
		
			if(isset($_POST['cal'])) {
				
				$val_1 = $_POST['value1'];
				$val_2 = $_POST['value2'];
				$opt = $_POST['operator'];
				
				if($opt=='+'){
					$result = $val_1+$val_2;
					echo "<h3>The Result is : $result</h3>";
				}
				if($opt=='-'){
					$result = $val_1-$val_2;
					echo "<h3>The Result is : $result</h3>";
				}
				if($opt=='*'){
					$result = $val_1*$val_2;
					echo "<h3>The Result is : $result</h3>";
				}
				if($opt=='/'){
					$result = $val_1/$val_2;
					echo "<h3>The Result is : $result</h3>";
				}
				
				
				
			}
		
		?>
		
	</body>
</html>