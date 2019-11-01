@extends('admin/base')
@section('title', 'Criar novo POST')

@section('content')
        
        <h1> Novo Post </h1>    
        <form method="post" action="{{url('admin/posts')}}">
            @csrf
            <label> Título</label>
            <input type="text" name="titulo">

            <label>Descrição</label>
            <textarea name='descricao'></textarea>
            <input type="submit" value="Cadastrar">
        </form>
@endsection   
