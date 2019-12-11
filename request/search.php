<?php 

include '../koneksi.php';
$keyword = $_GET["keyword"];
$query = mysqli_query($konek, "SELECT *FROM tbl_user WHERE nama_user LIKE '%$keyword%'");

?>
<table class="table">
          <thead>
            <tr>
        <th>Nama</th>
        <th>password</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($query as $data): ?>
        <tr>
          <td><?php echo $data['nama_user'] ?></td>
          <td><?php echo $data['password_user'] ?></td>
          <td><?php echo $data['email_user'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>