@extends('layouts.app')
@section('title', 'ModaWeb - Home')
@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <img src="{{ asset('images/elements/undraw_empty_cart_co35.svg') }}" width="300px" class="my-2 img-top-card">
                <div class="card-header-modaweb text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        Escritorio
                        | 
                        <small>
                            <i class="fas fa-user-ninja"></i> Administrador
                        </small>
                    </h4>
                </div>

                <div class="card-body row">
                        <div class="col-md-4 mt-5">
                            <div class="card text-center">
                                <img src="{{ asset('images/elements/avatar.svg') }}" width="157px" class="my-2 img-top-card">
                                <div class="card-body">
                                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-block ">
                                        <i class="fa fa-users"></i>
                                        Módulo Usuarios
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-md-4 mt-5">
                            <div class="card text-center">
                                <img src="{{ asset('images/elements/category.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                <div class="card-body">
                                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block ">
                                        <i class="fas fa-list-alt"></i>
                                        Módulo Categorías
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-md-4 mt-5">
                            <div class="card text-center">
                                <img src="{{ asset('images/elements/undraw_people_re_8spw.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                <div class="card-body">
                                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-block ">
                                        <i class="fa fa-clothes"></i>
                                        Módulo de Ropa
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
