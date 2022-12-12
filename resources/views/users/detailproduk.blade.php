<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPID | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
    .max-text {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 100px;
        }
</style>
<body>
<div class="container-fluid">

   
<div class="col-md-12">
    <div class="card mt-4 mb-2">
        <img src="https://raw.githubusercontent.com/starduststr/tpid/main/1.png" alt="produk" class="d-block img-circle rounded-3" style="width: 100%;" height="100px">
    </div>
    <strong class="mt-4 mb-4">{{judul_produk}}</strong>

    <div class="card mt-4 border-0">
        <label for=""><b>Tentang</b></label>
        <p class="mt-2">
            {{deskripsi_panjang}}
        </p>
    </div>

    <div class="fixed-bottom card mb-2 ms-2 me-2 border-0">
        <div class="card-body">
            
            <strong style="color: dodgerblue">Rp.{{harga_produk}}</strong>
            <a href="#" style="position: absolute; right: 25px; width: 100px; margin-top:-15px;" class="btn btn-primary img-rounded">Beli</a>
        </div>
    </div>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>