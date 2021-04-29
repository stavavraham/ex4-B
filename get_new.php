<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

<style>
.wrapper {
  background-color: #fefbd8 ;
   width: 430px;
    position:absolute;
    top: 50%;
    left: 50%;
    margin-top: -200px;
    margin-left: -215px;
    
}

.card{
 width: 25rem; 
 height: 12rem;
}
</style>


  <title>Php new</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>



<body class="wrapper">
    <?php
    $un = $_GET["fullName"];
    $pw =$_GET["date"];
    $ph =$_GET["phone"];
    ?>

<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Hello <?php echo $un;?>!</h5>
    <h6 class="card-subtitle mb-2 text-muted"> Your appointment was scheduled to <?php echo $pw;?> </h6>
    <p class="card-text">  We will remind you a day before with a call to this number: <?php echo $ph;?> </p>
    <h5 class="card-title">  Take Care!</h5>
  </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</body>
</html>


