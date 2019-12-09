@extends('admin/base')
@section('title', 'Adicionar novo VIDEO')

@section('content')
        
        <h1> Novo Video </h1>    
        <form method="post" action="{{url('admin/videos/'.$video->id)}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <label> Título</label>
            <input type="text" name="titulo">

            <label>Descrição</label>
            <textarea name='descricao'>{{$video->descricao}}</textarea>
            
            <label>Link</label>
            <input name='link'>{{$video->link}}
            <input type="submit" value="Adicionar">
        </form>
@endsection   
