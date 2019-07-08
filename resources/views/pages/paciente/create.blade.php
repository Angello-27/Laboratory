@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Administrador de Pacientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" action="{{ route('paciente.store') }}" autocomplete="off"
                          class="form-horizontal">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Nuevo Paciente') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('paciente.index') }}"
                                           class="btn btn-sm btn-primary">{{ __('volver atras') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Identidad') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('ci') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}"
                                                   name="ci" id="input-ci" type="text"
                                                   placeholder="{{ __('N° Cédula de Identidad') }}"
                                                   value="{{ old('ci') }}"/>
                                            @if ($errors->has('ci'))
                                                <span id="name-error" class="error text-danger"
                                                      for="input-ci">{{ $errors->first('ci') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                                                   name="nombre" id="input-nombre" type="text"
                                                   placeholder="{{ __('Nombre Completo') }}"
                                                   value="{{ old('nombre') }}"/>
                                            @if ($errors->has('nombre'))
                                                <span id="name-error" class="error text-danger"
                                                      for="input-nombre">{{ $errors->first('nombre') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Apellido') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}"
                                                   name="apellido" id="input-apellido" type="text"
                                                   placeholder="{{ __('Apellido Completo') }}"
                                                   value="{{ old('apellido') }}"/>
                                            @if ($errors->has('apellido'))
                                                <span id="email-error" class="error text-danger"
                                                      for="input-apellido">{{ $errors->first('apellido') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Sexo') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('sexo') ? ' has-danger' : '' }}">
                                            <input name="sexo" id="input-sexo" type="radio"
                                                   value="Masculino"/>
                                            <label class="col-sm-4 col-form-label">{{ __('Masculino') }}</label>
                                            <input name="sexo" id="input-sexo" type="radio"
                                                   value="Femenino"/>
                                            <label class="col-sm-4 col-form-label">{{ __('Femenino') }}</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Telefono') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                                                   name="telefono" id="input-telefono" type="text"
                                                   placeholder="{{ __('N° Teléfono Celular') }}"
                                                   value="{{ old('telefono') }}"/>
                                            @if ($errors->has('telefono'))
                                                <span id="email-error" class="error text-danger"
                                                      for="input-telefono">{{ $errors->first('telefono') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Correo') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('correo') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('correo') ? ' is-invalid' : '' }}"
                                                   name="correo" id="input-correo" type="email"
                                                   placeholder="{{ __('Correo Electrónico') }}"
                                                   value="{{ old('correo') }}"/>
                                            @if ($errors->has('correo'))
                                                <span id="email-error" class="error text-danger"
                                                      for="input-correo">{{ $errors->first('correo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Direccion') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                                            <textarea
                                                    class="form-control{{ $errors->has('dirrecion') ? ' is-invalid' : '' }}"
                                                    name="direccion" id="input-direccion" rows="4"
                                                    placeholder="{{ __('Eje: Zona Norte, Barrio 23 c/Sin nombre #25') }}"
                                                    value="{{ old('direccion') }}"></textarea>
                                            @if ($errors->has('direccion'))
                                                <span id="email-error" class="error text-danger"
                                                      for="input-direccion">{{ $errors->first('direccion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Seguro') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('seguro') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('seguro') ? ' is-invalid' : '' }}"
                                                   name="seguro" id="input-seguro" type="text"
                                                   placeholder="{{ __('N° Seguro Social') }}"
                                                   value="{{ old('seguro') }}"/>
                                            @if ($errors->has('seguro'))
                                                <span id="email-error" class="error text-danger"
                                                      for="input-seguro">{{ $errors->first('seguro') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Observacion') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('observacion') ? ' has-danger' : '' }}">
                                            <textarea
                                                    class="form-control{{ $errors->has('observacion') ? ' is-invalid' : '' }}"
                                                    name="observacion" id="input-observacion" rows="4"
                                                    placeholder="{{ __('Describe los detalles sobre alguna observación del paciente.') }}"
                                                    value="{{ old('observacion') }}"></textarea>
                                            @if ($errors->has('observacion'))
                                                <span id="email-error" class="error text-danger"
                                                      for="input-direccion">{{ $errors->first('observacion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection