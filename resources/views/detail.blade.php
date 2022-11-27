@extends('index');
@section('container')

@foreach ($bookdetail as $bookdetails)
<div class="Book1">
    <div class="card" style="width: 20rem;">
        <img src={{$bookdetails->image}} class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-title">Title : {{$bookdetails->title}}</p>
          <p class="card-text2">Author : {{$bookdetails->author}}</p>
          <p class="card-text2">Publisher : Publisher {{$bookdetails->publisher_id}}</p>
          <p class="card-text2">Year : {{$bookdetails->year}}</p>
          <p class="card-text2">Synopsis :</p>
          <p class="card-text2">{{$bookdetails->synopsis}}</p>

        </div>
      </div>
</div>
@endforeach
@endsection

<style>
    .Book1{
        display: flex;
        justify-content: center;
    }
    .Book1 p{
        font-family: sans-serif;
        font-style: italic;
    }
</style>
