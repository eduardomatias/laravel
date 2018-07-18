@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="container">
                        <div class="row">
                            <div class="col">ID</div>
                            <div class="col">NOME</div>
                            <div class="col">MASCOTE</div>
                            <div class="col">DATA</div>
                            <div class="w-100"></div>
                            @forelse  ($times as $t)
                                <div class="col">{{$t->id}}</div>
                                <div class="col">{{$t->nome}}</div>
                                <div class="col">{{$t->mascote}}</div>
                                <div class="col">{{$t->created_at}}</div>
                                <div class="w-100"></div>
                            @empty
                                <div class="col">Não encontrado</div>
                            @endforelse
                        </div>  
                        {{ $times->links() }}
                    </div>

                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
