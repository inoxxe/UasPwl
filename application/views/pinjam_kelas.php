
<html lang="en">
<head>
  <title>E-class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <h1>Peminjaman Kelas</h1>
            <h1>Selamat Datang <b><?php echo $this->session->userdata('nama'); ?></b></h1>

    
<form action="<?php echo base_url().'index.php/control_peminjaman/proses_kelas' ?>" method="post" name="form">
  <div class="form-group col-md-8">
      <label for="inputState">Pilih Hari</label>
      <select <select class="form-control" name="hari"
        <option selected value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamis">Kamis</option>
        <option value="jumat">Jumat</option>
      </select>
    </div>
    <div class="form-group col-md-8">
      <label for="inputState">Pilih Jam</label>
      <select id="inputState" name="jam" class="form-control">
        <option value="07.00-09.30" selected>07.00-09.30</option>
        <option value="07.00-08.40" >07.00-08.40</option>
        <option value="08.40-10.20" >08.40-10.20</option>
        <option vlaue="09.30-12.00" >09.30-12.00</option>
        <option value="10.20-12.00" >10.20-12.00</option>
        <option value="12.30-14.10" >12.30-14.10</option>
        <option value="12.30-15.00" >12.30-15.00</option>
      </select>
      <div class="form-group">
    	<label for="exampleFormControlTextarea1">Keperluan</label>
    	<textarea name=keperluan class="form-control" id="exampleFormControlTextarea1" rows=""></textarea>
  		</div>
      <input type="hidden" name="nim" value="<?php echo $this->session->userdata('username'); ?>  " ></br>
  	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="submit" name= "logout" class="btn btn-primary" >Kembali</button>

    <?php
    
  $status = $this->session->userdata('status');
  if($status == "ya"){
    echo "<div class='jumbotron'>
  <h2 class='display-4'>UDINUS SEMARANG</h2>
 <h3 style=color:green;>Permintaan Kelas Diterima</h3>
  <p class='lead'>Terima kasih "; ?><?php echo $this->session->userdata('nama'); ?><?php echo " permintaan peminjaman kelasmu untuk hari";?><?php echo $set['hari'];?><?php
  }elseif($status == "tidak"){
    echo "Maaf";
  }
?>


    </div>
    
</form>


</body>
</html>

