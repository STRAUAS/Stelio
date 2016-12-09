@extends('layouts.admin')

@section('conteudo')


    <div class="container">


            <div class="row col-md-10 col-md-offset-1 custyle">

                <p class="page-header">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        {{Session::get('message')}}
                    </div>
                    @endif
                    </p>

                <table class="table table-striped custab">
                    <thead>
                    <a href="{{route('topico.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b>
                        Adicionar nova Aconodação</a>
                    <tr>
                        <th>ID</th>
                        <th>Nome_topico</th>
                        <th>Autor</th>
                        <th>Designacao</th>
                        <th>Estado</th>
                        <th class="text-center">Acção</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($acomodacoes as $acomodacao)
                        <tr>
                            <td>{{$topico->id}}</td>
                            <td>{{$topico->Nome_topico}}</td>
                            <td>{{$topico->autor}}</td>
                            <td>{{$topico->designacao}}</td>
                            <td>{{$topico->estado}}</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span
                                            class="glyphicon glyphicon-edit"></span> Editar</a> <a href="#"
                                                                                                   class="btn btn-danger btn-xs"><span
                                            class="glyphicon glyphicon-remove"></span> Remover</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>



@stop