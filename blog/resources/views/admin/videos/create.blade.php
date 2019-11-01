@extends('admin/base')
@section('title', 'Adicionar novo VIDEO')

@section('content')
        
        <h1> Novo Video </h1>    
        <form method="post" action="{{url('admin/videos')}}">
            @csrf
            <label> Título</label>
            <input type="text" name="titulo">

            <label>Descrição</label>
            <textarea name='descricao'></textarea>

            <label>Link</label>
            <input type="text" name='link'>
            <input type="submit" value="Adicionar">
        </form>
@endsection   
