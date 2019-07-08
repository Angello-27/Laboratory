@extends('layouts.app', ['activePage' => 'paciente', 'titlePage' => __('Administrador de Pacientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Paciente') }}</h4>
                            <p class="card-category"> {{ __('Lista de todos los Pacientes registrados') }}</p>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('paciente.create') }}"
                                       class="btn btn-sm btn-primary">{{ __('Nuevo Paciente') }}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        {{ __('Cedula Iden.') }}
                                    </th>
                                    <th>
                                        {{ __('Nombres') }}
                                    </th>
                                    <th>
                                        {{ __('Apellidos') }}
                                    </th>
                                    <th>
                                        {{ __('Telefono') }}
                                    </th>
                                    <th>
                                        {{ __('N° Seguro') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($pacientes as $paciente)
                                        <tr>
                                            <td>
                                                {{ $paciente->ci }}
                                            </td>
                                            <td>
                                                {{ $paciente->nombre }}
                                            </td>
                                            <td>
                                                {{ $paciente->apellido }}
                                            </td>
                                            <td>
                                                {{ $paciente->telefono }}
                                            </td>
                                            <td>
                                                {{ $paciente->seguro }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('paciente.destroy', $paciente) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a rel="tooltip" class="btn btn-warning btn-link"
                                                       href="{{ route('paciente.edit', $paciente) }}"
                                                       data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-link"
                                                            data-original-title="" title=""
                                                            onclick="confirm('{{ __("¿Estás seguro de que quieres eliminar a este paciente?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection