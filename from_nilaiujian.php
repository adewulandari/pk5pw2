

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5 mx-10">
        <h2>Form Nilai Ujian</h2>
        <hr>
<form method="post" action="">
  <div class="form-group row">
    <label for="nim" class="col-3 col-form-label">NIM</label> 
    <div class="col-6">
      <input id="nim" name="nim" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="mk" class="col-3 col-form-label">Pilih MK</label> 
    <div class="col-6">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option>Data Warehouse</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-3 col-form-label">Nilai</label> 
    <div class="col-6">
      <input id="nilai" name="nilai" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-6">
    <input type="submit" name="proses" class="btn btn-success" value="Simpan">
    </div>
  </div>
</form>
<br>
<hr>
<br>
</div>

</body>
</html>
