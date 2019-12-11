<?php 

include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($konek, "SELECT *FROM tbl_pelanggan WHERE id='$id'");
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
  <h2>Update data mahasiswa</h2>
  <form action="proses_update.php" method="POST">
  <?php foreach($data as $value):?>
    <div class="form-group">
      <label for="email">nama:</label>
      <input type="text" class="form-control" id="email" value=<?php echo $value['nama']?> name="xnama">
    </div>
    <div class="form-group">
      <label for="email">alamat:</label>
      <input type="text" class="form-control" id="email" value=<?php echo $value['alamat']?> name="xalamat">
    </div>
    <div class="form-group">
    <label for="sel1">Jenis kelamin</label>
    <select class="form-control" id="sel1" name="xjk">
        <option><?php echo $value['jenis_kelamin']?></option>
        <option value="laki laki">laki laki</option>
        <option value="perempuan">perempuan</option>
    </select>
    </div>
    <div class="form-group">
      <label for="email">tanggal lahir:</label>
      <input type="date" class="form-control" value="<?php echo $value['tanggal_lahir'] ?>" name="xttl">
    </div>
    <?php endforeach ?>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
