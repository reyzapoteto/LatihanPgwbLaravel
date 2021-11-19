@extends('AdminLTE.TemplateMaster')


@section('content')


<div class="content-wrapper">
    <div class="container">
        <div class="container-fluid">

<form>

    <div class="form-group">
      <label for="formGroupExampleInput">Nama Produk</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Produk anda">
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput2">Deskripsi Produk</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi Produk anda">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Owner Produk</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Owner Produk anda">
      </div>

      <div class="row">
        <div class="col">
            <label for="formGroupExampleInput3">Jumlah Produk</label>
          <input type="text" class="form-control" placeholder="Jumlah Produk anda" id="formGroupExampleInput3">
        </div>
        <div class="col">
            <label for="formGroupExampleInput4">Harga Produk</label>
          <input type="text" class="form-control" placeholder="Harga Produk anda" id="formGroupExampleInput4">
        </div>
      </div>
            </form>

            <button type="button" class="btn btn-primary btn-sm mt-4">Simpan</button>

        </div>
    </div>
</div>

@endsection
