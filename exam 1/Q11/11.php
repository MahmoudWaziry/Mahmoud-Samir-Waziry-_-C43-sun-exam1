<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="<?php if(isset($_COOKIE['bg_color'])) echo $_COOKIE['bg_color'] ?>">
    

<h1 class="  text-center  text-danger   ">11th Problem</h1>

<div class="row justify-content-center  w-auto col-12">

    <form method="post" class="col-10" action="handelform.php">

    <select name="bg_color" class="form-select" aria-label="Default select example">
  <option selected >select back groung color</option>
  <option name="bg_color" value="bg-primary">primary</option>
  <option name="bg_color" value="bg-secondary">secondary</option>
  <option name="bg_color" value="bg-success">success</option>
</select>
        <div>
            <button type="submit" name="submit" class="btn btn-danger">submit</button>
        </div>
    </form>
</div>
<?php setcookie("bg_color","",time()-60); ?>

</body>
</html>