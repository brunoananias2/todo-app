@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-5 w-100 h-100 d-flex justify-content-center align-items-center">
            <div class="text-center" style="min-width:60%">
                <h1 class="display-4 text-white">Todo App</h1>
                <h3 class="text-white pt-5">Adicione as tarefas a sua lista!</h3>
                <form action="{{route('todo.store')}}" method="POST">
                @csrf
                <div class="input-group mb-3 w-100">
                    <input type="text" class="form-control form-control-lg" name="title" placeholder="Escreva aqui.." aria-label="Recipient's username" atia-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" id="button-addon2"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                </form>

                <h2 class="text-white pt-2">Minha Lista de Tarefas</h2>
                <div class="bg-white w-100">
                    @forelse ($todos as $todo)
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <div class="p-4 ">@if($todo->completed == 0)
                        <form action="{{route('todo.update', $todo->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="text" name="completed" value="1" hidden>
                        <div class="d-flex align-items-center">
                            <button class="border-0 bg-transparent"><i class="far fa-circle fa-2x"></i></button> {{$todo->title}}</span>
                        </div>
                        </form>
                        @else
                        <form action="{{route('todo.update', $todo->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="text" name="completed" value="0" hidden>
                        <div class="d-flex align-items-center">
                            <button class="border-0 bg-transparent"><i class="fas fa-check-circle fa-2x text-success"></i></button> <span class="concluido">{{$todo->title}}</span>
                        </div>
                        </form>
                        @endif </div>

                        <div class="mr-4 d-flex align-items-center">
                            <a class="inlame-block" href="{{route('todo.edit', $todo->id)}}">
                            <i class="far fa-edit fa-2x text-primary"></i>
                            </a>

                            <form action="{{route('todo.destroy', $todo->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="border-0 bg-transparent ml-2">
                            <i class="far fa-trash-alt fa-2x text-danger"></i>
                            </button>
                            </form>

                        </div>
                    </div>
                    @empty
                    <p>Nenhuma tarefa</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
