<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
<div class="container">
        <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>nama</th>
                <th>produk</th>
                <th>jumlah</th>
                <th>total harga</th>
            </tr>
            <?php require_once "proses_belanja.php";?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $produk; ?></td>
                <td><?= $jumlah; ?></td>
                <td><?= (int) $total_harga; ?></td>                
                
            </tr>
        </table>
    </div>
</body>
</html>