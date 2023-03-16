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

    <div class="card bg-light ms-1 me-1 mt-3" style="border-radius: 25px 25px 5px 5px; height: 100%; ">
        
        <div class="card-body">
            {{-- <div class="row mb-2">
                <marquee width="60%" direction="left" height="" scrollamount="4" loop="1">
                    This is a sample scrolling text that has scrolls texts to left.
                </marquee>
            </div> --}}
            
            <div class="col-12 mt-2">
                <div class="card shadow-sm p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3 text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('assets/icons/pulsa.svg')}}" alt="pulsa" width="55px;"></a>
                            <label style="font-size: 10px;;">Pulsa</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/kategori/data-362939"><img src="{{asset('assets/icons/data.svg')}}" alt="data" width="55px;"></a>
                            <label style="font-size: 10px;;">Kuota</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/digital/171821"><img src="{{asset('assets/icons/token pln.svg')}}" alt="token pln" width="55px;"></a>
                            <label style="font-size: 10px;;">Token PLN</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/kategori/games-362943"><img src="{{asset('assets/icons/game.svg')}}" alt="game" width="55px;"></a>
                            <label style="font-size: 10px;;">Game</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/kategori/e-money-362942"><img src="{{asset('assets/icons/E-money.svg')}}" alt="E-money" width="55px;"></a>
                            <label style="font-size: 10px;;">E-money</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/kategori/telp-dan-sms-362941"><img src="{{asset('assets/icons/paket sms dan telp.svg')}}" alt="sms telp" width="55px;"></a>
                            <label style="font-size: 10px;;">Paket sms/telp</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/kategori/voucher-362944"><img src="{{asset('assets/icons/voucher.svg')}}" alt="voucher" width="55px;"></a>
                            <label style="font-size: 10px;;">Voucher</label>
                        </div>
                        <div class="col-3 text-center">
                            <img src="{{asset('assets/icons/lainnya.svg')}}" alt="lainnya" width="55px;">
                            <label style="font-size: 10px;;">Lainnya</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                        
                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/SLIDE 1.jpg') }}" class="d-block img-circle rounded-3" style="width: 100%;" height="120px">
                            </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/SLIDE 2.jpg') }}" class="d-block rounded-3" style="width: 100%;" height="120px">
                        </div>
                        <!-- <div class="carousel-item">
                            <img src="ny.jpg" alt="New York" class="d-block w-100">
                        </div> -->
                        </div>
                    </div>
                </div>
                <span class="mt-4">Pascabayar</span>
                <div class="card shadow-sm p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/digital/171836"><img src="{{asset('assets/icons/tagihan pln.svg')}}" alt="tagihan pln" width="55px;"></a>
                            <label style="font-size: 10px;;">Tagihan PLN</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/digital/171839"><img src="{{asset('assets/icons/tagihan pdam.svg')}}" alt="pdam" width="55px;"></a>
                            <label style="font-size: 10px;;">PDAM</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/digital/171839"><img src="{{asset('assets/icons/tagihan internet.svg')}}" alt="internet" width="55px;"></a>
                            <label style="font-size: 10px;;">Internet</small>
                        </div>
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/digital/171839"><img src="{{asset('assets/icons/tagihan bpjs.svg')}}" alt="bpjs" width="55px;"></a>
                            <label style="font-size: 10px;;">BPJS</small>
                        </div>
                       
                        <div class="col-3 text-center">
                            <a href="https://digitalpelajar.bukaolshop.site/digital/171839"><img src="{{asset('assets/icons/tagihan gas negara.svg')}}" alt="gas negara" width="55px;"></a>
                            <label style="font-size: 10px;;">Gas Negara</small>
                        </div>
                    </div>
                </div>
                
            </div>
            {{-- <div class="row">
                <div class="mt-2 col-md-12">
                    <span>Transaksi Terakhir</span>
                    <div class="card shadow-sm p-3 mb-2 mt-2 bg-body rounde">
                            <table class="table">
                                <tbody id="table_update"></tbody>
                            </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
{{-- modal pulsa --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Provider</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="dropdown">
                <a class="btn btn-info text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih Provider
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://digitalpelajar.bukaolshop.site/digital/171791">Tri</a></li>
                  <li><a class="dropdown-item" href="https://digitalpelajar.bukaolshop.site/digital/171792">Telkomsel</a></li>
                  <li><a class="dropdown-item" href="https://digitalpelajar.bukaolshop.site/digital/171793">Axis</a></li>
                  <li><a class="dropdown-item" href="https://digitalpelajar.bukaolshop.site/digital/171794">Smartfren</a></li>
                  <li><a class="dropdown-item" href="https://digitalpelajar.bukaolshop.site/digital/171795">XL</a></li>
                  <li><a class="dropdown-item" href="https://digitalpelajar.bukaolshop.site/digital/171797">Indosat</a></li>
                </ul>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
</div>
  
@endsection()