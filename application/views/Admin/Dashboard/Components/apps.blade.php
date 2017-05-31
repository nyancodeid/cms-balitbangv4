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
						<a href="index.html"><i class="material-icons">equalizer</i>&nbsp;&nbsp;<span>Overview</span></a>
					</li>
					<li>
						<a href="javascript:void()" data-target="#item1" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">description</i>&nbsp;&nbsp;Pos</a>
						
						<ul class="nav nav-stacked collapse left-submenu" id="item1">
							<li name="All">
								<a href="/bb-admin/posts/filter/all">
									<span>Semua</span>
								</a>
							</li>
							<li name="Draft">
								<a href="/bb-admin/posts/filter/draft">
									<span>Draf</span>
								</a>
							</li>
							<li name="Scheduled">
								<a href="/bb-admin/posts/filter/scheduled">
									<span>Terjadwal</span>
								</a>
							</li>
							<li name="Published">
								<a href="/bb-admin/posts/filter/published">
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
						<a href="javascript:void()" data-target="#item3" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">comment</i>&nbsp;&nbsp;Komentar</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="item3">
							<li><a href="#">Diterbitkan</a></li>
							<li><a href="#">Spam</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void()" data-target="#item4" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">poll</i>&nbsp;&nbsp;Statistik</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="item4">
							<li><a href="#">Ikhtisar</a></li>
							<li><a href="#">Pos</a></li>
							<li><a href="#">Sumber lalu lintas</a></li>
							<li><a href="#">Pemirsa</a></li>
						</ul>
					</li>
					<li>
						<a href="index.html"><i class="material-icons">widgets</i>&nbsp;&nbsp;<span>Plugin</span></a>
					</li>
					<li>
						<a href="index.html"><i class="material-icons">web</i>&nbsp;&nbsp;<span>Tata Letak</span></a>
					</li>
					<li>
						<a href="index.html"><i class="material-icons">palette</i>&nbsp;&nbsp;<span>Tema</span></a>
					</li>
					<li>
						<a href="javascript:void()" data-target="#setelan" data-toggle="collapse" data-parent="#stacked-menu"><i class="material-icons">settings</i>&nbsp;&nbsp;Setelan</a>          
						<ul class="nav nav-stacked collapse left-submenu" id="setelan">
							<li><a href="#">Dasar</a></li>
							<li><a href="#">Pos, Komentar, dan Share</a></li>
							<li><a href="#">Bahasa dan Pemformatan</a></li>
							<li><a href="#">SEO</a></li>
							<li><a href="#">Lainnya</a></li>
							<li><a href="#">Pengguna</a></li>
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