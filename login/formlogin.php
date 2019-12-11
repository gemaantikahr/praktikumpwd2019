<?php 

session_start();
$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 6);

$captanya = $_SESSION["captcha_code"] = $captcha_code;
$target_layer = imagecreatetruecolor(70,30);

$captcha_background = imagecolorallocate($target_layer, 255,160,119);
imagefill($target_layer, 0,0, $captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
imagestring($target_layer, 5,5,5, $captcha_code, $captcha_text_color);
// header("Content-type: image/jpeg");
// imagejpeg($target_layer);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login User</h2>
  <form action="proses_login.php" method="POST">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="email" name="xusername">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="xpassword">
    </div>
    <div class="form-group">
      <label for="pwd">captcha:</label>
      <label for=""> <?php echo $captcha_code?></label>
    </div>
    <div class="form-group" hidden>
      <label for="pwd">captcha:</label>
      <input type="text" name="xa" value=<?php echo $captcha_code?>>
    </div>
    <div class="form-group">
      <label for="email">Masukkan captcha:</label>
      <input type="text" class="form-control" id="email" name="xcaptcha">
    </div>
  
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
