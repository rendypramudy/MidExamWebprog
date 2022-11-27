@extends('index')
@section('container')

<div class="title">
    <h2>
        Book Category : Fiction
    </h2>
</div>
<div class="content">
    <div class="Book1">
        <div class="card" style="width: 15rem;">
            <img src="https://upload.wikimedia.org/wikipedia/id/b/bf/Harry_Potter_and_the_Sorcerer%27s_Stone.jpg?20160312111440" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Harry Potter and the Philosophers Stone </h5>
              <p class="card-text1">by</p>
              <p class="card-text2">J.K Rowling</p>
              <a href="" class="btn btn-primary">Detail</a>
            </div>
          </div>
    </div>
    <div class="Book2">
        <div class="card" style="width: 15rem;">
            <img src="https://upload.wikimedia.org/wikipedia/id/4/49/Sampul_buku_Harry_Potter_dan_Kamar_Rahasia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Harry Potterand the Chamber of Secrets </h5>
              <p class="card-text1">by</p>
              <p class="card-text2">'J.K Rowling</p>
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
