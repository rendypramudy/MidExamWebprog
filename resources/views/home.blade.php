@extends('index')
@section('container')

<div class="title">
    <h2>
        Book Title
    </h2>
</div>
<br>
<div class="content">
@foreach ($book as $books)
<div class="Book1">
    <div class="card" style="width: 15rem;">
        <img src={{$books->image}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$books->title}}</h5>
          <p class="card-text1">by</p>
          <p class="card-text2">{{$books->author}}</p>
          <a href="/detail/{{$books->id}}" class="btn btn-primary">Detail</a>
        </div>
      </div>
</div>
@endforeach

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
