<?php 
	include 'header.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enqueue</title>
</head>

<style>

input[type=submit] {
  width: 15%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #3CBC8D;
}
</style>
<h2>Upload your NID for security verification :</h2>
<body>
        <center>
		<form method="POST" action="../controller/fileupload.php" enctype="multipart/form-data">
			<fieldset>
				Document: <input type="file" name="myfile"/>
				<input type="submit" name="submit" value="SUBMIT"/>
			</fieldset>
		</form>
		</center>
</body>
</html>

<?php 
include 'footer.php'
	
?>