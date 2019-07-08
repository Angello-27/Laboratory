<div class="sidebar" data-color="azure" data-background-color="white"
     data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <i><img class="simple-text logo-normal" style="margin-left:16px; width:80px"
                src="{{ asset('material') }}/img/logo.png"></i>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Inicio') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelPaciente" aria-expanded="true">
                    <i class="material-icons">accessible</i>
                    <p>{{ __('Paciente') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelPaciente">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'paciente' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('paciente.index') }}">
                                <i class="material-icons">accessibility</i>
                                <span class="sidebar-normal">{{ __('registro paciente') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelMovimiento" aria-expanded="true">
                    <i class="material-icons">date_range</i>
                    <p>{{ __('Movimientos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelMovimiento">
                    <ul class="nav">

                    </ul>
                </div>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelMaestro" aria-expanded="true">
                    <i class="material-icons">supervisor_account</i>
                    <p>{{ __('Maestro') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelMaestro">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelAnalisis" aria-expanded="true">
                    <i class="material-icons">local_hospital</i>
                    <p>{{ __('Analisis') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelAnalisis">
                    <ul class="nav">

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>