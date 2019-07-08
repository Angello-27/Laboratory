@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-primary text-center">
                        <p class="card-title"><strong>{{ __('Verifique su Correo') }}</strong></p>
                    </div>
                    <div class="card-body">
                        <p class="card-description text-center"></p>
                        <p>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.) }}
                            </div>
                        @endif

                        {{ __('Antes de continuar, consulte su correo electrónico para ver un enlace de verificación.') }}

                        @if (Route::has('verification.resend'))
                            {{ __('If you did not receive the email') }}, <a
                                    href="{{ route('verification.resend') }}">{{ __('haga clic aquí para solicitar otra') }}</a>
                            @endif
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection