<li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
       <i class="fa fa-cubes m-2"></i><p class="ml-2">Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('penggunas.index') }}"
       class="nav-link {{ Request::is('penggunas*') ? 'active' : '' }}">
       <i class="fa fa-user m-2"></i><p class="ml-2">Pengguna</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pemdaMonitorings.index') }}"
       class="nav-link {{ Request::is('pemdaMonitorings*') || Request::is('ujiAktBansos*') ? 'active' : '' }}">
       <i class="fa fa-life-ring m-2"></i><p class="ml-2">Monitoring</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ Auth::user()->role != 'Pemerintah Daerah' ? route('validasiPerwakilans.index') : route('validasiPerwakilans.show', [Auth::user()->kd_pwk]) }}"
       class="nav-link {{ Request::is('validasiPerwakilans*') || Request::is('validasiPemdas*') ? 'active' : '' }}">
        <i class="fa fa-object-ungroup m-2"></i><p class="ml-2">Validasi & QA</p>
    </a>
</li>