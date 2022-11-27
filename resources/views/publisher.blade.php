@extends('index')
@section('container')


@foreach ($publisher as $pb)
<div class="publisher-1">
   <div class="logo-1">
    <img src={{$pb->image}} width="300px" height="200px" alt="">
  </div>
  <div class="text">
    <h4>{{$pb->name}}</h4>
    <h4>Address - {{$pb->adress}}</h4>
    <h4>Phone - {{$pb->phone}}</h4>
    <h4>Email - {{$pb->email}}</h4>
</div>
  </div>
</div>
<br>

<div class="content">
    @foreach ($pb->books as $b)
    <div class="Book1">
        <div class="card" style="width: 15rem;">
            <img src={{$b->image}} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$b->title}}</h5>
              <p class="card-text1">by</p>
              <p class="card-text2">{{$b->author}}</p>
              <a href="/detail/{{$b->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
@endforeach
</div>
<br>
@endforeach
<br>
<br>

<style>
        .publisher-1{
        display: flex;
        justify-content: left;
        gap: 2rem;
        }
        .content{
        display: flex;
        justify-content: center;
        gap: 5rem;
        }
        .text{
            background-color: rgb(165, 165, 165)
        }
</style>
@endsection
