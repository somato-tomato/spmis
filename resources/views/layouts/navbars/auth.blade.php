<div class="sidebar" data-color="dark" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Creative Tim') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'siklus' || $elementActive == 'prodi' || $elementActive == 'fakultas' || $elementActive == 'akademik' || $elementActive == 'lembaga' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#master">
                    <i class="nc-hat-3"></i>
                    <p>
                            {{ __('Lembagas') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="master">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'lembaga' ? 'active' : '' }}">
                            <a href="{{ route('lembaga.index') }}">
                                <span class="sidebar-mini-icon">{{ __('L') }}</span>
                                <span class="sidebar-normal">{{ __(' Lembaga ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'akademik' ? 'active' : '' }}">
                            <a href="{{ route('akademik.index') }}">
                                <span class="sidebar-mini-icon">{{ __('A') }}</span>
                                <span class="sidebar-normal">{{ __(' Akademik ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'fakultas' ? 'active' : '' }}">
                            <a href="{{ route('fakultas.index') }}">
                                <span class="sidebar-mini-icon">{{ __('F') }}</span>
                                <span class="sidebar-normal">{{ __(' Fakultas ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'prodi' ? 'active' : '' }}">
                            <a href="{{ route('prodi.index') }}">
                                <span class="sidebar-mini-icon">{{ __('P') }}</span>
                                <span class="sidebar-normal">{{ __(' Prodi ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'siklus' ? 'active' : '' }}">
                            <a href="{{ route('siklus.index') }}">
                                <span class="sidebar-mini-icon">{{ __('S') }}</span>
                                <span class="sidebar-normal">{{ __(' Siklus ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
