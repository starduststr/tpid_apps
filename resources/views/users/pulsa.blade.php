@extends('layouts.user')
@section('content')

<div class="row">
    <div class="col">
        <form action="https://digitalpelajar.bukaolshop.site/produk/judulproduk" method="GET" class="form-group">
            <div class="input-group mt-3 mb-3">
                {{-- <input type="text" name="catatan" class="form-control {{hasil_kontak}}" placeholder="Masukan Nomor Hp"> --}}
                <input type="text" name="catatan" class="form-control" placeholder="Masukan Nomor Hp">
                <a href="https://digitalpelajar.bukaolshop.site/ambil_kontak"> <button class="btn btn-secondary rounded-0"><i class="fa fa-address-book"></i></button> </a>
            </div>

            <select name="operator" id="operator" class="form-control">
                <option selected disabled>Pilih operator</option>
                <option value="362945">Tri</option>
                <option value="362947">Telkomsel</option>
                <option value="362949">Indosat</option>
                <option value="362951">XL</option>
                <option value="362952">Smartfren</option>
                <option value="362953">Axis</option>
            </select>

            <div class="card"></div>

        </form>
    </div>
</div>
@endsection()