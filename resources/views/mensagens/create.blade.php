@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Registar Pergunta</h1>

                <a href="{{route('topicos.create')}}" class="btn btn-primary btn-xs pull-right"> criar Topicos</a>
                <a href="{{route('topicos.create')}}" class="btn btn-primary btn-xs pull-right"> Ver Topicos</a>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="#">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">topico</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="escreva o topico"/>
                        </div>
                    </div>
                </div>



                <div class="form-group ">
                    <button type="button" class="btn btn-primary btn-lg btn-block login-button">Registar</button>
                </div>
                <div class="login-register">
                    <a href="index.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

@stop