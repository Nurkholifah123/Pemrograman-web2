<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
        <div class="container">
        <h2>Belanja Online</h2>
<form action="hasil_belanja.php" method="POST"  >
  <div class="form-group row">
    <label for="costomer" class="col-4 col-form-label">Costomer</label> 
    <div class="col-8">
      <input id="costomer" name="costomer" placeholder="Nama Costomor" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pipih produk" id="pipih produk_0" type="radio" class="custom-control-input" value="Tv"> 
        <label for="pipih produk_0" class="custom-control-label">Tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pipih produk" id="pipih produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="pipih produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pipih produk" id="pipih produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="pipih produk_2" class="custom-control-label">Mesin Cuci</label>
    </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
  </div>
     <div class="col-md-6">
             <br>
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">DAFTAR HARGA</a>
				<div class="list-group-item">
					TV : Rp. 4.200.000
				</div>
				<div class="list-group-item">
						KULKAS : Rp. 3.100.000
                </div>	
					<div class="list-group-item">
						Mesin Cuci : Rp. 3.800.000
                </div>
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">HARGA DAPAT BERUBAH SETIAP HARI <span class="badge badge-light badge-pill"></span></a>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>