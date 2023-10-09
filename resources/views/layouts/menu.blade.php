<!-- <li class="nav-item">
    <a href="#"
       class="nav-link">
        <p>Dashboard</p>
    </a>
</li> -->

<!-- <li class="nav-item">
    <a href="#"
       class="nav-link">
        <p>Pengaturan</p>
    </a>
</li> -->

<li class="nav-item">
    <a href="{{ route('penggunas.index') }}"
       class="nav-link {{ Request::is('penggunas*') ? 'active' : '' }}">
        <p>Pengguna</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('daftarPemdaBaselines.index') }}"
       class="nav-link {{ Request::is('daftarPemdaBaselines*') || Request::is('ujiAktBansos*') ? 'active' : '' }}">
        <p>Monitoring</p>
    </a>
</li>

<!-- <li class="nav-item">
    <a href="#"
       class="nav-link">
        <p>Validasi Isian</p>
    </a>
</li>

<li class="nav-item">
    <a href="#"
       class="nav-link">
        <p>Upload Laporan</p>
    </a>
</li>

<li class="nav-item">
    <a href="#"
       class="nav-link">
        <p>Ekspor</p>
    </a>
</li> -->