@extends('Client.Layout.default')
@section('title','Inserir um enemy')
@section('content')
    <form method="POST" action="{{ route('account.virtual.bot.enemy.store' , ['id' => $bot->vserver->id]) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="name" placeholder="Nome do char" class="form-control">
            <button class="btn btn-success" type="submit">Adicionar</button>
        </div>
    </form>
@endsection