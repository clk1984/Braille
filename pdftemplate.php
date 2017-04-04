
<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="./assets/pdftemplate.css">
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<title>Braille</title>
</head>
<body>
<div class="bar">
	  <div>
	  	<img class="logo" src="./assets/images/pajaro.png">
	  </div>
</div>


	<h1  id="instrucciones">Esta es la traduccion del texto que solicito</h1>


<hr>
<div class="container2">
	<img class="traduccion"src="<?php echo $filename;?>">
</div>
<hr>
<div class="container">

	<h1>Texto original</h1>
	<p><?php  echo $texto; ?></p>
</div>
	<!-- <table border="0" >
	<tr>
	<th>Texto original</th>
	<th>Traduccion</th>
	</tr>
	<tr>
	<td><?php  echo $texto; ?></td>
	<td><img class="traduccion"src="<?php echo $filename;?>"></td>
	</tr>
	</table>
	 --><!-- <div class="row">
	     <div class="col-md-6">
	        <label for="msg">Texto Original</label>
	        <p><?php  echo $texto; ?></p>
    	     </div>

	      <div class="col-md-6">
		<img src="<?php echo $filename;?>">
	      </div>
	 </div> -->
<?php
require 'vendor/autoload.php';
?>
</body>
</html>