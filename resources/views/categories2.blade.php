@extends('index')
@section('container')

<div class="title">
    <h2>
        Book Category : Non Fiction
    </h2>
</div>

<div class="content">
    <div class="Book1">
        <div class="card" style="width: 15rem;">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/8/89/Sang_Pemimpi_sampul.jpg/330px-Sang_Pemimpi_sampul.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sang Pemimpi</h5>
              <p class="card-text1">by</p>
              <p class="card-text2">Andrea Hinata</p>
              <a href="" class="btn btn-primary">Detail</a>
            </div>
          </div>
    </div>
    <div class="Book2">
        <div class="card" style="width: 15rem;">
            <img src="https://upload.wikimedia.org/wikipedia/id/8/8e/Laskar_pelangi_sampul.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Laskar Pelangi</h5>
              <p class="card-text1">by</p>
              <p class="card-text2">Andrea Hinata</p>
              <a href="" class="btn btn-primary">Detail</a>
            </div>
          </div>
    </div>
</div>

<style>
    .title{
        background-color:grey;
    }
    .title h2{
        color: white;
    }
    .content{
        display: flex;
        justify-content: center;
        gap: 7px;
    }
</style>


@endsection
