<!DOCTYPE>
<html>
<head>
	<title>SQL dan MYSQL</title>
	<?php
		include "koneksi.php";
		include "library/import.php";
		include "navbar.php";
	?>
</head>
<body>
	<div class="container">
		  <div class="row">
		  <a href="#" class="btn btn-success" id="tambah">Create</a>
		    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Nama</th>
		      <th>Jenis Kelamin</th>
		      <th>Alamat</th>
		      <th>Tangal Lahir</th>
		      <th>Aksi</th>
		    </tr>
		  </thead>
		  <?php 
		  include 'koneksi.php';
		  $query=mysqli_query($konek,"SELECT *FROM tbl_pelanggan ORDER BY id DESC") or die (mysqli_error($konek));
		  if(mysqli_num_rows($query)==0){
		    echo '<tbody>
		    <tr class="active">
		      <td colspan="5">Tidak ada data yang di entrikan </td>
		    </tr>
		  </tbody>';
		    
		  }
		  else{
		    $no=1;
		    while($data=mysqli_fetch_assoc($query)){
		    echo '<tbody>
		    <tr class="active">';
		    echo '<td>'.$no.'</td>';
		    echo '<td>'.$data['nama'].'</td>';
		    echo '<td>'.$data['jenis_kelamin'].'</td>';
			echo '<td>'.$data['alamat'].'</td>';
			echo '<td>'.$data['tanggal_lahir'].'</td>';    

		    echo '<td><a class="btn btn-primary" href="updatemahasiswa.php?id='.$data['id'].'">Update</a>
		     <a class="btn btn-danger" href="hapusmahasiswa.php?id='.$data['id'].'">Delete</a></tr>';
		    echo '</tr>';
		    $no++;
		    }

		  }
		  
		  ?>
		</table> 

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukan Data Mahasiswa</h4>
        </div>
        <div class="modal-body">
		  <form class="form-horizontal" id="form" action="tambahmahasiswa.php" method="POST" onsubmit="return validasi(this)">
		  <fieldset>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nim</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" placeholder="masukan nim" id="nim" name="xnim" >
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Nama Lengkap</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Nama" id="nama" name="xnama" >
		      </div>
		    </div>
			<div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Nama" id="email" name="xnama" >
		      </div>
		    </div>
		     <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control"  placeholder="Masukan Alamat" id="alamat" name="xalamat" >
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="select" class="col-lg-2 control-label">Jenis Kelamin</label>
		      <div class="col-lg-10">
		        <select class="form-control" id="select" name="xjk" required>
		          <option value="laki laki">Laki laki</option>
		          <option value="perempuan">Perempuan</option>
		        </select>
		      </div>
		    </div>
		      <div class="form-group">
				    	<?php
				    		$tgl =  date('l, d-m-Y');
				    	?>
				      <label for="inputEmail" class="col-lg-2 control-label">Tanggal Lahir</label>
				      <div class="col-lg-10">
				        <input type="date" class="form-control"  placeholder="" id="" name="xttl">
				      </div>
				    </div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <input type="submit" name="simpan" class="btn btn-primary" value="Tambahkan">
		      </div>
		    </div>
		  </fieldset>
		</form> 
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</body>
<script type="text/javascript">
		$('#tambah').click(function(){
		$('#myModal').modal('show'); 
		});
</script>

<script type="text/javascript">
	function validasi(form){
		if(form.nim.value == ""){
			alert("NIM Tidak boleh kosong!");
			form.nim.focus();
			return false;
		}
		pola_nim=/^[0-9]+$/;
		if(!pola_nim.test(form.nim.value)){
			alert("NIM Harus Angka");
			form.nim.focus();
			return false;
		}

		if(form.nama.value == ""){
			alert("Nama Tidak Boleh Kosong!");
			return false;
		}

		pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		if(!pola_email.test(form.email.value)){
			alert("email tidak sesuai");
			form.email.focus();
			return false;
		}

		if(form.alamat.value == ""){
			alert("Alamat Tidak boleh kosong!");
			form.alamat.focus();
			return false;
		}

		if(form.jekel.value == ""){
			alert("Jenis Kelamin Tidak boleh kosong!");
			form.jekel.focus();
			return false;
		}
		if(form.tgllhr.value == ""){
			alert("tANGGAL LAHIR Tidak boleh kosong!");
			form.tgllhr.focus();
			return false;
		}


	}
	</script>
	</div>
</body>
</html>