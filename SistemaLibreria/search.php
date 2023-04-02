<!DOCTYPE html>
<html>
<head>
	<title>Busque un libro/Autor</title>
	<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		
</head>
<body>
<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Library</a>
		</div>
		<ul class="nav navbar-nav">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="search.php">Libros Y Autores</a></li>

		  <li><a href="add_borrower.php">Contactos</a></li>
		</ul>
	  </div>
	</nav>
<div class="container">
	<h1>Busque un libro/Autor</h1>
	<input class="form-control" type="text" id="key" name="search" placeholder="search" />
	<br/>
	<center>
	<input type="button" class="btn btn-primary" id="btn" value="Search" onclick="search()"/>
	</center>
	<div id="tbl"></div>
</div>
<script>
function search(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","php/getAllBooks.php?search="+document.getElementById("key").value,false);
	xmlhttp.send(null);
	document.getElementById("tbl").innerHTML=xmlhttp.responseText;
}


</script>

</body>
</html>
