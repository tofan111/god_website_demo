

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
  pre_r($_POST);

  if(isset($_POST['submit'])){
      echo $_POST['name']."! Your query has been submitted.";
  }
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <p>Name: <input type="text" name="name" value=""></p>
    <p>Query: <input type="text" name="query" value=""></p>
    <p><input type="submit" name="submit" value="submit"></p>
</form>

<?php 
    function pre_r($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";

    }
?>
    
</body>
</html>