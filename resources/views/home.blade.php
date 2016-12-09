@extends('layouts.app')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">opicos.com</div>

                <div class="panel-body">

                    <div class="container">
                        <div class="row col-md-6 col-md-offset-2 custyle">
                            <table class="table table-striped custab">
                                <thead>
                                <a href="{{route('email.create')}}" class="btn btn-primary btn-xs pull-right"> criar Comentario</a>
                                <a href="{{route('email.create')}}" class="btn btn-primary btn-xs pull-right"> Ver Topicos</a>
                                <a href="{{route('email.create')}}" class="btn btn-primary btn-xs pull-right"> criar Topicos</a>


                                <tr>
                                    <th>ID</th>
                                    <th>Autor</th>
                                    <th>Ramo</th>
                                    <th class="text-center">Accao</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>Stelio</td>
                                    <td>Fisica</td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Uane</td>
                                    <td>Historia</td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Stelio Uane</td>
                                    <td>Portugues</td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>

@endsection
