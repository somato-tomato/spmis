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
            <li class="{{  $elementActive == 'doc' || $elementActive == 'sisi' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#masterdokumen">
                    <i class="nc-hat-3"></i>
                    <p>
                        {{ __('Data Dokumen') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="masterdokumen">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'sisi' ? 'active' : '' }}">
                            <a href="{{ route('sisi.index') }}">
                                <span class="sidebar-mini-icon">{{ __('S') }}</span>
                                <span class="sidebar-normal">{{ __(' Sisi ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'doc' ? 'active' : '' }}">
                            <a href="{{ route('doc.index') }}">
                                <span class="sidebar-mini-icon">{{ __('D') }}</span>
                                <span class="sidebar-normal">{{ __(' Dokumen ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{  $elementActive == 'score' || $elementActive == 'masuk' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#nilaimasuk">
                    <i class="nc-hat-3"></i>
                    <p>
                        {{ __('Data Dokumen Masuk') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="nilaimasuk">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'masuk' ? 'active' : '' }}">
                            <a href="{{ route('sisi.index') }}">
                                <span class="sidebar-mini-icon">{{ __('DD') }}</span>
                                <span class="sidebar-normal">{{ __(' Data Dokumen ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'score' ? 'active' : '' }}">
                            <a href="{{ route('doc.index') }}">
                                <span class="sidebar-mini-icon">{{ __('DPD') }}</span>
                                <span class="sidebar-normal">{{ __(' Data Penilaian Dokumen ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
