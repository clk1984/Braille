

<!DOCTYPE html>
<html>
<head>
	<title>pdftempalte</title>
	<style type="text/css">
	*, *:before, *:after {
  box-sizing: inherit;
}
html {
  box-sizing: border-box;
}
.bar {
  display: flex;
  align-items: center;
  width: 100%;
  background: #eee;
  padding: 20px;
}
.search {
  flex: 1;
}
.logo{
	width: 80px;
	height: 80px;
}
.image{
	    margin: 0 auto;
    width: 400px;
    /* Para ver el borde del formulario */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;

}
	</style>
</head>
<body>

<?php
$filename = $_SESSION["file"];

$html =   '<img src="./'.$filename.'" >';
?>
<div class="bar">
	   <div class="icon icon-1"></div>
	  <div class="icon icon-2"></div>
	  <div class="logo">
	  	<img class="logo" src="./assets/images/Single bird.png">
	  </div>
	  <div class="mail "></button></div>
	  <div class="pdf "></div>
</div>

<div class="image">
<?php echo $html; ?>

</div>



</body>
</html>
