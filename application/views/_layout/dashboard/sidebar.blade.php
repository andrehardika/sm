<div id="sidebar">
	<div id="sidebar-wrapper">
		<div class="sidebar-title"><h2>E-Kelurahan</h2><span>@yield('nama-kelurahan')</span></div>
		<ul class="sidebar-nav">
			<li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
			<li><a href="#"><i class="fa fa-fw fa-home"></i><span class="nav-label">Dashboard</span></a></li>
			<li class="nav-label">Kelurahan</li>
			<li><a href="#"><i class="fa fa-fw fa-info-circle"></i><span class="nav-label">Profil</span></a></li>
			<li><a href="{{site_url('ui/kelurahan')}}"><i class="fa fa-fw fa-bank"></i><span class="nav-label">Kelurahan</span></a></li>
			<li><a href="{{site_url('ui/konfirmasi_kelurahan')}}"><i class="fa fa-fw fa-check"></i><span class="nav-label">Konfirmasi</span></a></li>
			<li>
				<a href="#nav-1" data-toggle="collapse" aria-controls="nav-1">
					<i class="fa fa-fw fa-user"></i>
					<span class="nav-label">Kependudukan</span>
					<span class="nav-caret"><i class="fa fa-caret-down"></i></span>
				</a>
				<ul class="sidebar-nav-child collapse collapseable" id="nav-1">
					<li><a href="{{site_url('ui/kependudukan')}}"><i class="fa fa-fw fa-user"></i><span class="nav-label">Data Penduduk</span></a></li>
					<li><a href="{{site_url('ui/keluarga')}}"><i class="fa fa-fw fa-users"></i><span class="nav-label">Data Keluarga</span></a></li>
					<li><a href="#"><i class="fa fa-fw fa-user-plus"></i><span class="nav-label">Kelahiran</span></a></li>
					<li><a href="#"><i class="fa fa-fw fa-user-times"></i><span class="nav-label">Kematian</span></a></li>
				</ul>
			</li>
			<li class="nav-label">Produk</li>
			<li><a href="{{ site_url('kategori') }}"><i class="fa fa-fw fa-truck"></i><span class="nav-label">Kategori</span></a></li>
			<li>
				<a href="#nav-surat-masuk" data-toggle="collapse" aria-controls="nav-surat-masuk">
					<i class="fa fa-fw fa-envelope"></i>
					<span class="nav-label">Surat Masuk</span>
					<span class="nav-caret"><i class="fa fa-caret-down"></i></span>
				</a>
				<ul class="sidebar-nav-child collapse collapseable" id="nav-surat-masuk">
					<li><a href="#"><i class="fa fa-file-o"></i><span class="nav-label">Daftar Surat Masuk</span></a></li>
					<li><a href="#"><i class="fa fa-archive"></i><span class="nav-label">Arsip Surat Masuk</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#nav-surat-keluar" data-toggle="collapse" aria-controls="nav-surat-keluar">
					<i class="fa fa-fw fa-envelope-open"></i>
					<span class="nav-label">Surat Keluar</span>
					<span class="nav-caret"><i class="fa fa-caret-down"></i></span>
				</a>
				<ul class="sidebar-nav-child collapse collapseable" id="nav-surat-keluar">
					<li><a href="{{site_url('ui/surat_blanko_ktp')}}"><i class="fa fa-file-o"></i><span class="nav-label">Blanko Isian KTP</span></a></li>
					<li><a href="#"><i class="fa fa-file-o"></i><span class="nav-label">Blanko Isian KK</span></a></li>
					<li><a href="#"><i class="fa fa-file-o"></i><span class="nav-label">SKCK</span></a></li>
					<li><a href="#"><i class="fa fa-file-o"></i><span class="nav-label">Keterangan Miskin</span></a></li>
					<li><a href="#"><i class="fa fa-file-o"></i><span class="nav-label">Keterangan Miskin (RT)</span></a></li>
					<li><a href="{{site_url('ui/keterangan_ijin_usaha')}}"><i class="fa fa-file-o"></i><span class="nav-label">Keterangan Ijin Usaha</span></a></li>
					<li><a href="{{site_url('ui/surat_sktm')}}"><i class="fa fa-file-o"></i><span class="nav-label">SKTM</span></a></li>
				</ul>
			</li>
			<li class="nav-label">Rekapitulasi</li>
			<li><a href="#"><i class="fa fa-fw fa-file"></i><span class="nav-label">Laporan</span></a></li>
			<li class="nav-label">Website</li>
			<li>
				<a href="#nav-berita" data-toggle="collapse" aria-controls="nav-berita">
					<i class="fa fa-fw fa-newspaper-o"></i>
					<span class="nav-label">Berita</span>
					<span class="nav-caret"><i class="fa fa-caret-down"></i></span>
				</a>
				<ul class="sidebar-nav-child collapse collapseable" id="nav-berita">
					<li><a href="#"><i class="fa fa-tasks"></i><span class="nav-label">Daftar Berita</span></a></li>
					<li><a href="#"><i class="fa fa-pencil-square-o"></i><span class="nav-label">Draf</span></a></li>
					<li><a href="#"><i class="fa fa-archive"></i><span class="nav-label">Arsip</span></a></li>
				</ul>
			</li>
			<li><a href="#"><i class="fa fa-fw fa-sitemap"></i><span class="nav-label">Profil</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-calendar"></i><span class="nav-label">Agenda</span></a></li>
			<li>
				<a href="#nav-5" data-toggle="collapse" aria-controls="nav-5">
					<i class="fa fa-fw fa-image"></i>
					<span class="nav-label">Galeri</span>
					<span class="nav-caret"><i class="fa fa-caret-down"></i></span>
				</a>
				<ul class="sidebar-nav-child collapse collapseable" id="nav-5">
					<li><a href="#"><i class="fa fa-image"></i><span class="nav-label">Foto</span></a></li>
					<li><a href="#"><i class="fa fa-video-camera"></i><span class="nav-label">Video</span></a></li>
				</ul>
			</li>
			<li><a href="#"><i class="fa fa-fw fa-bullhorn"></i><span class="nav-label">Pengumuman</span></a></li>
			<li class="nav-label">Lain-Lain</li>
			<li><a href="#"><i class="fa fa-fw fa-cog"></i><span class="nav-label">Pengaturan</span></a></li>
			<li class="active"><a href="{{base_url('ui')}}"><i class="fa fa-fw fa-rocket"></i><span class="nav-label">UI</span></a></li>
		</ul>
		<div class="sidebar-footer"></div>
	</div>
</div>