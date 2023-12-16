<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link navbar-info">
        <img src="{{ asset('dist/img/arsyLogo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ str_replace('_', ' ', strtoupper(config('app.name'))) }}</span>
    </a>

    <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dist/img/man.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="javascript:void(0);" class="d-block">{{ 'ucwords(Auth::user()->name)'  }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent" data-widget="treeview"
                    role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                                                                                                                                                 with font-awesome or any other icon font library -->
                        <li class="nav-header">MAIN MENU</li>
                            <li class="nav-item has-treeview">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Setting
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('setting/user') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>User</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('setting/role') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Role</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('setting/permission') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Permission</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @can('SIDEBAR.MAINMENU.MASTERDATA')
                            <li class="nav-item has-treeview">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-icon fas fa-book-medical"></i>
                                    <p>
                                        Master Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @can('SIDEBAR.MAINMENU.MASTERDATA.JADWALDOKTER')
                                        <li class="nav-item">
                                            <a href="{{ route('Jadwaldokter.index') }}" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Jadwal Dokter</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('SIDEBAR.MAINMENU.MASTERDATA.JADWALDOKTER_DETAIL')
                                        <li class="nav-item">
                                            <a href="{{ route('JadwaldokterDetail.index') }}" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Jadwal Dokter Detail</p>
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan

                        <li class="nav-item has-treeview">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-icon fas fa-pen"></i>
                                <p>
                                    Pendaftaran Rajal
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.PENDAFTARAN_PASIEN_BARU')
                                    <li class="nav-item">
                                        <a href="{{ route('Pasienbaru.index') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Pendaftaran Pasien Baru</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.PENDAFTARAN_ONSITE')
                                    <li class="nav-item">
                                        <a href="{{ route('Onsite.index') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Pendaftaran Onsite</p>
                                        </a>
                                    </li>
                                @endcan

                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.VERIFIKASIONLINE')
                                    <li class="nav-item has-treeview">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Verifikasi Online
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.VERIFIKASIONLINE.PASEINBARU')
                                                <li class="nav-item">
                                                    <a href="{{ route('VerifikasiPasienbaru.create') }}" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Verifikasi Pasien Baru</p>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.VERIFIKASIONLINE.PENDAFTARAN')
                                                <li class="nav-item">
                                                    <a href="{{ route('Verifikasipendaftaran.create') }}" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Verifikasi Pendaftaran</p>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcan

                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.JADWALOPERASI')
                                    <li class="nav-item has-treeview">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Jadwal Operasi
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.JADWALOPERASI.DASHBOARD')
                                                <li class="nav-item">
                                                    <a href="{{ route('JadwalOperasi.dashboard') }}" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Dashboard</p>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.JADWALOPERASI.BUATJADWAL')
                                                <li class="nav-item">
                                                    <a href="{{ route('JadwalOperasi.create') }}" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Buat Jadwal</p>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.JADWALOPERASI.LISTJADWAL')
                                                <li class="nav-item">
                                                    <a href="{{ route('JadwalOperasi.list') }}" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>List Jadwal</p>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcan

                                {{-- TODO adding permission --}}
                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RAJAL.BPJS_TASKID')
                                    <li class="nav-item has-treeview">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                BPJS Task ID
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('TaskIdSetting.index') }}" class="nav-link">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>Setting Per Poli</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endcan
                            </ul>
                        </li>


                        @can('SKDP_VIEW')
                            {{-- <li class="nav-item has-treeview">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                SKDP Pasien
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('Skdp.create') }}" class="nav-link">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>Buat SKDP</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('Skdplist.view') }}" class="nav-link">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>List SKDP</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                        @endcan

                        @can('SIDEBAR.MAINMENU.PENDAFTARAN_RANAP')
                            <li class="nav-item has-treeview">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-icon fas fa-bed"></i>
                                    <p>
                                        Pendaftaran Ranap
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @can('SIDEBAR.MAINMENU.PENDAFTARAN_RANAP.BRIDGING_APLICARE')
                                        <li class="nav-item has-treeview">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Bridging Aplicare
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                {{-- <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>
                                                                    Master Data
                                                                    <i class="right fas fa-angle-left"></i>
                                                                </p>
                                                            </a>
                                                            <ul class="nav nav-treeview">
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                                        <p>BPJS Kelas</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                                        <p>BPJS Kamar</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                                        <p>Kamar Bridging</p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li> --}}
                                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RANAP.BRIDGING_APLICARE.DASHBOARD')
                                                    <li class="nav-item">
                                                        <a onclick="window.open('{{ route('RanapKamar.dashboard') }}')" class="nav-link">
                                                            <i class="far fa-dot-circle nav-icon"></i>
                                                            <p>Dashboard</p>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('SIDEBAR.MAINMENU.PENDAFTARAN_RANAP.BRIDGING_APLICARE.BRIDGING')
                                                    <li class="nav-item">
                                                        <a href="{{ route('BridgingAplicare.index') }}" class="nav-link">
                                                            <i class="far fa-dot-circle nav-icon"></i>
                                                            <p>Bridging</p>
                                                        </a>
                                                    </li>
                                                @endcan
                                            </ul>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan

                        @can('SIDEBAR.MAINMENU.PENDAFTARAN_ANJUNGAN')
                            <li class="nav-item has-treeview">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-icon fas fa-box"></i>
                                    <p>
                                        Pendaftaran Anjungan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('view.dashboard.list') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Dashboard List</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('DaftarAnjunganPetugas.panggil') }}" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Petugas Panggil</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('SIDEBAR.MAINMENU.REPORT')
                            <li class="nav-item has-treeview">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Report
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @can('SIDEBAR.MAINMENU.REPORT.LABORATORIUM')
                                        <li class="nav-item has-treeview">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Laboratorium
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                @can('SIDEBAR.MAINMENU.REPORT.LABORATORIUM.PENDAPATAN')
                                                    <li class="nav-item">
                                                        <a href="{{ route('LaboratoriumPendapatanController.index') }}" class="nav-link">
                                                            <i class="far fa-dot-circle nav-icon"></i>
                                                            <p>Pendapatan</p>
                                                        </a>
                                                    </li>
                                                @endcan
                                            </ul>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan

                        @can('SIDEBAR.BRIDGING_VCLAIM')
                            <li class="nav-header">BRIDGING VCLAIM</li>
                            @can('SIDEBAR.BRIDGING_VCLAIM.SEP')
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-icon fas fa-book"></i>
                                        <p>
                                            SEP
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('SIDEBAR.BRIDGING_VCLAIM.SEP.PEMBUATAN')
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="nav-icon fas fa-circle"></i>
                                                    <p>
                                                        Pembuatan SEP
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    @can('SIDEBAR.BRIDGING_VCLAIM.SEP.PEMBUATAN.RUJUKAN')
                                                        <li class="nav-item">
                                                            <a href="{{ route('SepRujukan.rujukan') }}" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>Rujukan</p>
                                                            </a>
                                                        </li>
                                                    @endcan
                                                    @can('SIDEBAR.BRIDGING_VCLAIM.SEP.PEMBUATAN.RUJUKANMAUAN_IGD')
                                                        <li class="nav-item">
                                                            <a href="{{ route('SepRujukanManual.rujukanmanual') }}" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p>Rujukan Manual / IGD</p>
                                                            </a>
                                                        </li>
                                                    @endcan
                                                </ul>
                                            </li>
                                        @endcan
                                        @can('SIDEBAR.BRIDGING_VCLAIM.SEP.UPDATEPULANG')
                                            <li class="nav-item">
                                                <a href="{{ route('UpdatePulang.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Update Pulang SEP</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('SIDEBAR.BRIDGING_VCLAIM.SEP.PENGAJUAN')
                                            <li class="nav-item">
                                                <a href="{{ route('PengajuanSEP.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Pengajuan SEP</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('SIDEBAR.BRIDGING_VCLAIM.SEP.PENCARIAN')
                                            <li class="nav-item">
                                                <a href="{{ route('PencarianSEP.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Pencarian SEP</p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan

                            @can('SIDEBAR.BRIDGING_VCLAIM.RUJUKAN')
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-icon fas fa-cogs"></i>
                                        <p>
                                            Rujukan
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('PembuatanRujukan.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Form Rujukan</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            @endcan

                            @can('SIDEBAR.BRIDGING_VCLAIM.KUNJUNGAN_KONTROL')
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-icon fas fa-bed"></i>
                                        <p>
                                            Kunjungan Kontrol / Inap
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('SIDEBAR.BRIDGING_VCLAIM.KUNJUNGAN_KONTROL.RENCANA_KONTROL')
                                            <li class="nav-item">
                                                <a href="{{ route('KunjunganKontrol.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Rencana Kontrol</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('SIDEBAR.BRIDGING_VCLAIM.KUNJUNGAN_KONTROL.RENCANA_RANAP')
                                            <li class="nav-item">
                                                <a href="{{ route('KunjunganInap.index') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Rencana Ranap</p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan

                            @can('SIDEBAR.BRIDGING_VCLAIM.PRB')
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-icon fas fa-paper-plane"></i>
                                        <p>
                                            Rujuk Balik (PRB)
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('Prb.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Form PRB</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan

                            @can('SIDEBAR.BRIDGING_VCLAIM.JAMINAN')
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-icon fa fa-puzzle-piece"></i>
                                        <p>
                                            Jaminan
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('Insiden.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>INSIDEN</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                        @endcan


                        <li class="nav-header">ADDITIONAL MENU</li>
                        {{-- <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link"
                                onclick="
                                            var conf = confirm('Apakah anda yakin ?');
                                            if (conf) {
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                            }">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Log Out</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li> --}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
</aside>
