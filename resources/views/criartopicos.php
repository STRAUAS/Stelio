@extends('templates.template-front-end')

@section('titulo')
Inicio
@stop

@section('conteudo-header')


<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Forum.com</div>

        <div class="panel-body">

            <div class="container">
                <div class="row col-md-6 col-md-offset-2 custyle">
                    <table class="table table-striped custab">
                        <thead>
                        <a href="{{route('topico.create')}}" class="btn btn-primary btn-xs pull-right"> comentar topicos</a>
                        <a href="{{route('listar.create')}}" class="btn btn-primary btn-xs pull-right"> Ver topicos</a>
                        <a href="{{route('topicos.create')}}" class="btn btn-primary btn-xs pull-right"> criar topicos</a>


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

@stop<?php
/**
 * Created by PhpStorm.
 * User: Strauas
 * Date: 12/8/2016
 * Time: 5:07 PM
 */