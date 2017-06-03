<header class="mdl-shadow--2dp" style="margin-bottom: 20px;">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				</button>
				<a class="navbar-brand" href="#">BalitBang CMS</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
		   			<li><a href="#">Lihat Website</a></li>
		    	</ul>
		    	<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="material-icons" np >assignment_ind</i> Ryan Aunur Rassyid <span class="caret"></span></a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">Profile</a>
							</li>
							<li>
								<a href="#">Settings</a>
							</li>
							<li>
								<a href="javascript:void()" onclick="action.logout()">Logout</a>
							</li>
						</ul>
					</li>
		    	</ul>
            </div>
		</div>
	</nav>
	<div class="big-nav">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<h4>{{ $config['sekolah']['name'] }}</h4>
				</div>
				<div class="col-md-10">
					<ul class="bredchrumb">
						<li>Overview</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="container">
		<div class="row">
			<!-- Sidenav -->
			<aside class="col-md-2">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored new-post-button">New Post</button>
				<ul class="nav nav-pills nav-stacked left-menu" id="stacked-menu">
					<li>
						<a href="{{ base_url('bb-admin') }}"><i class="material-icons">equalizer</i>&nbsp;&nbsp;<span>Overview</span></a>
					</li>
					<li>
						<a href="javascript:void()" data-target="#post" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">description</i>&nbsp;&nbsp;Pos</a>
						
						<ul class="nav nav-stacked collapse left-submenu" id="post">
							<li name="All">
								<a href="{{ base_url('bb-admin/posts') }}">
									<span>Semua</span>
								</a>
							</li>
							<li name="Draft">
								<a href="{{ base_url('bb-admin/posts/filter/draft') }}">
									<span>Draf</span>
								</a>
							</li>
							<li name="Scheduled">
								<a href="{{ base_url('bb-admin/posts/filter/scheduled') }}">
									<span>Terjadwal</span>
								</a>
							</li>
							<li name="Published">
								<a href="{{ base_url('bb-admin/posts/filter/published') }}">
									<span>Diterbitkan</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void()" data-target="#item2" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">insert_drive_file</i>&nbsp;&nbsp;Laman</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="item2">
							<li><a href="#">Semua</a></li>
							<li><a href="#">Draf</a></li>
							<li><a href="#">Diterbitkan</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void()" data-target="#guru" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">group</i>&nbsp;&nbsp;Guru</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="guru">
							<li><a href="{{ base_url('bb-admin/guru') }}">Data Guru</a></li>
							<li><a href="{{ base_url('bb-admin/guru/mengajar') }}">Data Mengajar</a></li>
							<li><a href="{{ base_url('bb-admin/guru/import') }}">Import Data</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void()" data-target="#siswa" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">group</i>&nbsp;&nbsp;Siswa</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="siswa">
							<li><a href="{{ base_url('bb-admin/siswa') }}">Data Siswa</a></li>
							<li><a href="{{ base_url('bb-admin/siswa/alumni') }}">Data Alumni</a></li>
							<li><a href="{{ base_url('bb-admin/siswa/import') }}">Import Data</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void()" data-target="#komentar" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">comment</i>&nbsp;&nbsp;Komentar</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="komentar">
							<li><a href="{{ base_url('bb-admin/komentar/filter/published') }}">Diterbitkan</a></li>
							<li><a href="{{ base_url('bb-admin/komentar/filter/spam') }}">Spam</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void()" data-target="#item4" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">poll</i>&nbsp;&nbsp;Statistik</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="item4">
							<li><a href="{{ base_url('bb-admin/statistik') }}">Ikhtisar</a></li>
							<li><a href="{{ base_url('bb-admin/statistik/by/pos') }}">Pos</a></li>
							<li><a href="{{ base_url('bb-admin/statistik/by/source_trafic') }}">Sumber lalu lintas</a></li>
							<li><a href="{{ base_url('bb-admin/statistik/by/visitor') }}">Pemirsa</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ base_url('bb-admin/plugin') }}"><i class="material-icons">widgets</i>&nbsp;&nbsp;<span>Plugin</span></a>
					</li>
					<li>
						<a href="{{ base_url('bb-admin/tata_letak') }}"><i class="material-icons">web</i>&nbsp;&nbsp;<span>Tata Letak</span></a>
					</li>
					<li>
						<a href="{{ base_url('bb-admin/template') }}"><i class="material-icons">palette</i>&nbsp;&nbsp;<span>Tema</span></a>
					</li>
					<li>
						<a href="javascript:void()" data-target="#setelan" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">settings</i>&nbsp;&nbsp;Setelan</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="setelan">
							<li><a href="{{ base_url('bb-admin/setelan/dasar') }}">Dasar</a></li>
							<li><a href="{{ base_url('bb-admin/setelan/elemen') }}">Pos, Komentar, dan Share</a></li>
							<li><a href="{{ base_url('bb-admin/setelan/bahasa_pemformatan') }}">Bahasa dan Pemformatan</a></li>
							<li><a href="{{ base_url('bb-admin/setelan/seo') }}">SEO</a></li>
							<li><a href="{{ base_url('bb-admin/setelan/lainnya') }}">Lainnya</a></li>
							<li><a href="{{ base_url('bb-admin/setelan/pengguna') }}">Pengguna</a></li>
						</ul>
					</li>
				</ul>
			</aside>
		

			<main class="col-md-10">
				@yield('content')
			</main>
		</div>
	</div>
</main>