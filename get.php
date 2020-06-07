<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  	
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
  <a class="navbar-brand" href="#">Code War </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item active">
        <a class="nav-link" href="#">About-Us </a>
      </li>

         <li class="nav-item active">
        <a class="nav-link" href="#">Contact-Us </a>
      </li>
    
    
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
$name=$_POST['name'];
$email=$_POST['email'];
$sesc=$_POST['desc'];







// DB Connection 
$servername ="localhost";
$username ="root";
$password="";
$database="contact";



$conn=mysqli_connect($servername,$username,$password,$database);


if (!$conn) {
die("Sorry Failed To Connect: <br>".mysqli_connect_error());

}

// Submmit to the datatbses 



$sql="INSERT INTO `contactus` (`name`, `email`, `concern`, `date`) VALUES ( '$name', '$email', '$sesc', current_timestamp())";


$result=mysqli_query($conn,$sql);
if ($result)
{
echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sucess !</strong> your entry  has been submitted sucessfully ..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}


else{

	echo "The Record Wast Not Inserted Sucessfully : ".mysqli_error($conn);
}


}




?>




<div class="container mt-3">


	<h1>Plese Send Me Your Concern  </h1>
	<form action="/nishant/get.php" method="post">
  <div class="form-group">



    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Name with anyone else.</small>


  </div>



    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
   
    </div>



  <div class="form-group">
  	<label for="desc">Description </label>
  	<textarea  class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
 
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>