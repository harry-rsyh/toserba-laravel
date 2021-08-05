@extends('layouts.main')

@section('content-title')
    <div class="d-sm-flex mb-4">
        <h1 class="h4 mb-0 text-gray-800">Add New Product</h1>
    </div>    
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            {{-- Kode Produk --}}
                            <div class="form-group row">
                                <label for="inputKodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control" id="inputKodeBarang" aria-describedby="inputKodeBarangHelp">
                                <small id="inputKodeBarangHelp">ex. 089686010947, 8992775001073, etc</small>
                                </div>
                            </div>
                            {{-- ./Kode Produk --}}

                            {{-- Prosuden --}}
                            <div class="form-group row">
                                <label for="inputMerk" class="col-sm-3 col-form-label">Merk</label>
                                <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputMerk" aria-describedby="inputMerkHelp">
                                <small id="inputMerkHelp">ex. Nestle, Unilever, Kao, Indofood, etc</small>
                                </div>
                            </div>
                            {{-- ./Produsen --}}

                            {{-- ./Produk --}}
                            <div class="form-group row">
                                <label for="inputProduk" class="col-sm-3 col-form-label">Produk</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputProduk" aria-describedby="inputProdukHelp">
                                    <small id="inputProdukHelp">ex. Dancow, Indomie, Biore, etc</small>
                                </div>
                            </div>
                            {{-- ./Produk --}}
                            
                            {{-- ./Produk --}}
                            <div class="form-group row">
                                <label for="inputNamaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputNamaBarang" aria-describedby="inputNamaBarangHelp">
                                    <small id="inputNamaBarangHelp">ex. Indomie gr. rendang 6gr, Chocolatos drink btl 200ml, etc</small>
                                </div>
                            </div>
                            {{-- ./Produk --}}

                            {{-- Kode Produk --}}
                            <div class="form-group row">
                                <label for="inputStockBarang" class="col-sm-3 col-form-label">Harga Barang</label>
                                <div class="col-sm-4 col-lg-7">
                                    
                                    <div class="input-group" aria-describedby="inputPcsHelp">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </div>
                                    <small id="inputPcsHelp" class="text-muted">
                                        Must be 8-20 characters long.
                                    </small>
                                    
                                </div>
                            </div>
                            {{-- ./Kode Produk --}}

                        </div>

                        <div class="col-lg-6">
                            
                            {{-- Kode Produk --}}
                            {{-- <div class="form-group row">
                                <label for="inputStockBarang" class="col-sm-3 col-form-label">Jumlah Barang</label>
                                <div class="col-sm-4 col-lg-5 col">
                                    
                                    <div class="input-group" aria-describedby="inputPcsHelp">
                                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">*pcs</span>
                                        </div>
                                    </div>
                                    <small id="inputPcsHelp" class="text-muted">
                                        Must be 8-20 characters long.
                                    </small>

                                    <div class="input-group mt-3" aria-describedby="inputBoxHelp">
                                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">*box</span>
                                        </div>
                                    </div>
                                    <small id="inputBoxHelp" class="text-muted">
                                        Must be 8-20 characters long.
                                    </small>
                                    
                                </div>
                            </div> --}}
                            {{-- ./Kode Produk --}}

                            <div class="form-group row">
                                <label for="inputStockBarang" class="col-sm-3 col-form-label">Jumlah Barang</label>
                                <div class="col-sm-9">
                                    
                                    {{-- Jumlah Barang --}}
                                    <div class="input-group" aria-describedby="inputJumlahBarang">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Box</span>
                                        </div>
                                        <input type="text" aria-label="First name" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Pcs</span>
                                        </div>
                                        <input type="text" aria-label="Last name" class="form-control">
                                    </div>
                                    {{-- ./Jumlah Barang --}}

                                    <small id="inputJumlahBarang" class="text-muted">
                                        * ex. Jumlah Barang = 3(box) * 40(pcs) = 140pcs
                                    </small>
                                    
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>
@endsection