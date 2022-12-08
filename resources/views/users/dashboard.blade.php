@extends('layouts.user')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<style>
    body{
        background-color: #2196F3;
    }
    .max-text {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 150px;
        }
</style>

<div class="col-md-12">
    <div class="card bg-light ms-1 me-1 mt-3" style="border-radius: 25px 25px 5px 5px; height: 100vh; ">
        <div class="card-body">
            <div class="col-12 mt-2">
                <div class="card shadow-sm p-3 mb-2 bg-body rounde">
                    <div class="row">
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/pulsa.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Pulsa</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/data.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Kuota</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/token pln.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Token PLN</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/game.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Game</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/E-money.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">E-money</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/paket sms dan telp.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Paket sms/telp</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="#"><img src="https://github.com/starduststr/tpid/blob/main/voucher.png?raw=true" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Voucher</label>
                        </div>
                        <div class="col-3 text-center">
                            <img src="https://github.com/starduststr/tpid/blob/main/pulsa.png?raw=true" alt="pulsa" width="55px;">
                            <label style="font-size: 10px;;">Lainnya</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <!-- Carousel -->
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                            
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://raw.githubusercontent.com/starduststr/tpid/main/1.png" class="d-block img-circle rounded-3" style="width: 100%;" height="100px">
                                </div>
                            <div class="carousel-item">
                                <img src="https://raw.githubusercontent.com/starduststr/tpid/main/2.png" class="d-block rounded-3" style="width: 100%;" height="100px">
                            </div>
                            <!-- <div class="carousel-item">
                                <img src="ny.jpg" alt="New York" class="d-block w-100">
                            </div> -->
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="mt-2 col-md-12">
                    <span>Transaksi Terakhir</span>
                    <div class="card shadow-sm p-3 mb-2 mt-2 bg-body rounde">
                            <table class="table">
                                <tbody id="table_update"></tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   getTransaksi('B47p').then(data => {
        let i =1
        var table = document.getElementById("table_update");
        Object.entries(data).forEach(([key, value]) => {
            if(i <= 4){
                row = $("<tr id=row"+i+">").appendTo(table);
                $("<td class=\"max-text\">").html(value.nama_barang).appendTo(row)
                $("<td>").html('<button class="btn btn-sm btn-primary">beli lagi</button>').appendTo(row)
            }
        
            i++
	});
});

	async function getTransaksi(id_user) {
		let response = await fetch('gettransaksi?page=1&id_user=' + id_user+'&email_user=false&filter_status=lunas')
		let data = await response.json();

		return data;
	}
</script>
@endsection()