<!DOCTYPE html>
<html lang="en">

<?php 
include "backend.php"; 
$calc=new Calculation(); // instantiation 
?>
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Jerry Simple-Calculator</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Simple Calculator</a>
    </div>


<form method="POST" action="">
<div class="container" style="margin-top:80px;">
    <div class="row">
  <div class="col-sm-3">
    <input type="number" class="form-control" name="num1" aria-describedby="numHelp" value="First Number" placeholder="First Number">
  </div>

  <div class="col-sm-3">
  <select class="form-select" aria-label="Default select example" name="symbol">
  <option selected value="">Operator</option>
  <option value="add">+</option>
  <option value="minus">-</option>
  <option value="divide">/</option>
  <option value="multiply">*</option>
</select>
</div>

  <div class="col-sm-3">
    <input type="number" class="form-control" name="num2" value="Second Number" placeholder="Second Number">
  </div>

  <div class="col-sm-3">
  <input type="submit" name="submit" class="btn btn-success" value="Show Result">
  </div>
</div>
</div>

<div class="col-sm-6" style="margin-left:22%; margin-top:20px;">
<input type="text-area" class="form-control" name="calculate" value="<?php
if (isset($_POST['submit'])) {
    $num1=$_POST['num1'];
    $symbol=$_POST['symbol']; 
    $num2=$_POST['num2'];

if($num1 == "" || $symbol == "" || $num2 == ""){
    echo "Insert the missing field";
}elseif($symbol == ""){
 echo "Please select an operator";	
}elseif($symbol == "add"){
    $calc->add($num1, $num2);
}elseif($symbol == "minus"){
    $calc->minus($num1, $num2);
}elseif($symbol == "multiply"){
    $calc->multiply($num1, $num2);
}elseif($symbol == "divide"){
    $calc->divide($num1, $num2);
}

}
?>" placeholder="Result">
</div>
</form>

</body>
</html>