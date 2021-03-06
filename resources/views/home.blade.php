@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue <b>{{Auth::user()->name }}</b> !!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Tu t'es connecté avec succès !

                    <br>

                    <a href="{{url('webserv')}}">Mon Webservices</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
