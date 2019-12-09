@extends('layouts.base')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$post->titulo}}</h1>            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {{$post->descricao}}
        </div>
        @comments([
            'model' => $post,
            'approved' => true
        ])
      </div>
    </div>
  </article>

  <hr>

  @endsection