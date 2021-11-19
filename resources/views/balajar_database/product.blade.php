@extends('AdminLTE.TemplateMaster')


@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="container-fluid">

            @php
            $nomomr = 1;
        @endphp

            <table class="table table-hover text-nowraps">

                <tr>
                    <td>Id</td>
                    <td>Nama Produk</td>
                    <td>Deskripsi</td>
                    <td>Harga</td>
                    <td>Jumlah</td>
                    <td>action</td>
                </tr>


                @foreach ($produk as $item)

                <tr>

                    <td>{{ $nomomr ++}}</td>
                    <td>{{ $item ->nama_produk}}</td>
                    <td>{{ $item ->deskripsi}}</td>
                    <td>{{ $item ->harga}}</td>
                    <td>{{ $item ->jumlah}}</td>
                    <td><a href ="{{ route('deleteProduct',$item ->id) }}" class ="btn btn-danger btn-sm btn-flat"><i class =" fa fa-trash"></i>  delete</a></td>

                </tr>

                @endforeach


            </table>
        </div>
    </div>
</div>

@endsection
