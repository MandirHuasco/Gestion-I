@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <?php $cont = 0;?>
            @foreach($user as $usuario)
                <?php $cont++;?>
                <div class="col-md-4 filter-invert" style="margin-top: 20px;">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Perfil N°{{$cont}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="xp-social-profile">
                                <div class="xp-social-profile-top">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="xp-social-profile-star py-3">
                                                <i class="mdi mdi-star font-24"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="xp-social-profile-avatar text-center">
                                                <img src="/img/icon.png" class="rounded-circle img-fluid">
                                                <span class="xp-social-profile-live"></span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="xp-social-profile-menu text-right py-3">
                                                <i class="mdi mdi-dots-horizontal font-24"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xp-social-profile-middle text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="xp-social-profile-title">
                                                <h5 class="my-1 text-black">{{$usuario['name']}}</h5>
                                            </div>
                                            <div class="xp-social-profile-subtitle">
                                                <p class="mb-3 text-muted">{{$usuario['sexo']}}</p>
                                            </div>
                                            <div class="xp-social-profile-desc">
                                                <p class="text-muted">Cargo: {{$usuario['cargo']}}</p>
                                                <button type="submit" class="btn btn-primary">Ver perfil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
