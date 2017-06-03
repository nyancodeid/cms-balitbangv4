@layout('Admin/Auth/layout')

@section('style')
<style>
:root {
	--color: #ebd835;
}

login-apps {
	display: block;
}
body {
	background-color: var(--color);
}
login-apps .mdl-card {
	width: 100%;
	height: 30em;
	min-height: 30em;

	margin-top: 5em;
}
login-apps .img-cover {
	height: 30em;
	width: 100%;
}
login-apps .mdl-tabs__tab-bar {
	justify-content: flex-start;
	-webkit-justify-content: flex-start;
	width: 100%;

	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.14), 0 0 0px 0 rgba(0, 0, 0, 0.12), 0 0 0px -1px rgba(0, 0, 0, 0.2);
}
login-apps .mdl-tabs__tab-bar .mdl-tabs__tab {
	opacity: .83;
	text-transform: none;
}
login-apps .mdl-tabs__tab-bar .mdl-tabs__tab.is-active:after {
	background: var(--color) !important;
}
login-apps .mdl-textfield__icon {
    font-size: 20px;
    padding-top: 4px;
    vertical-align: middle;
}
login-apps .form {
	padding: 16px;
}
login-apps .submit.overlay {
	background: var(--color);
	outline: none;
	border: none;
	border-radius: 100%;
	height: 52px;
	width: 52px;
	line-height: 52px;
	text-align: center;
	color: #FFF;

	position: absolute;
	right: calc(-52px / 2);
	top: 200px;
	z-index: 99;
}
login-apps .submit.overlay i {
	vertical-align: middle;
    padding-bottom: 4px;
}
login-apps .mdl-checkbox {
	margin: 16px 0;
}
</style>
@endsection

@section('content')
<login-apps>
	<div class="container">
		<div align="center">
			<h3 style="color: #FFF">BalitBang v4</h3>
		</div>

		<div class="mdl-card mdl-shadow--4dp">
			<div class="row">
				<div class="col-md-4" np style="padding-left: 15px;position: relative;">
					<header align="center">
						<h4>{{ $config['sekolah']['name'] }}</h4>
					</header>
					<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
						<div class="mdl-tabs__tab-bar">
							<a href="#login-panel" class="mdl-tabs__tab is-active">Login</a>
							<a href="#daftar-panel" class="mdl-tabs__tab">Daftar</a>
						</div>

						<div class="mdl-tabs__panel is-active" id="login-panel">
							<div class="form">
								<h6 class="subtitle" nm>Login dengan akun anda</h6>
								
								<i class="mdl-textfield__icon material-icons subtitle">assignment_ind</i>
								<div class="mdl-textfield mdl-js-textfield no--floating-label">
									<input class="mdl-textfield__input" type="text" id="identity">
									<label class="mdl-textfield__label" for="identity">Username / Email</label>
								</div>
								
								<i class="mdl-textfield__icon material-icons subtitle">lock_outline</i>
								<div class="mdl-textfield mdl-js-textfield no--floating-label">
									<input class="mdl-textfield__input" type="password" id="password">
									<label class="mdl-textfield__label" for="password">Password</label>
								</div>
								
								<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember_me">
									<input class="mdl-checkbox__input" type="checkbox" id="remember_me">
									<span class="mdl-checkbox__label" >Remember Me</span>
								</label>

								<p class="subtitle" nm>dengan memilih <span class="mdl-color-text--primary">Remember Me</span> maka anda mengizinkan aplikasi ini untuk menulis dan mengaksess cookie di browser anda.</p>

								<div style="display: flex; justify-content: space-between;">
									<a href="#" style="padding: 8px 0;">
										<h6 class="mdl-color-text--primary" nm>Lupa Password?</h6>
									</a>
									<button id="next-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="background-color: #4285f4;color: white;">
										Lanjut
									</button>
								</div>
							</div>
						</div>
						<div class="mdl-tabs__panel" id="daftar-panel">
							
						</div>
					</div>


					<button id="help-button" class="submit overlay mdl-shadow--2dp">
						<i class="material-icons">help_outline</i>
					</button>
				</div>
				<div class="col-md-8" np>
					@include('Components/imgCover', ["url" => base_url('storage/images/cover.png'), "class" => "img-cover"])
				</div>
			</div>
		</div>
	</div>
</login-apps>
@endsection

@section('javascript')
<script>
	balitbang.isLogin = {{ ($logged_in) ? 1 : 0 }};
</script>
@include('Components/actionJS')
<script>
$(document).ready(function() {
	var data = {
		identity: '',
		password: '',
		remember_me: false
	}

	$('#next-button').click(function() {
		data.identity = $('#identity').val();
		data.password = $('#password').val();
		data.remember_me = $('.mdl-checkbox').hasClass('is-checked');
		data.csrf_balitbang = balitbang.hash

		action.login(data);
	});

	$(document).ready(function() {
		action.isLogin();
	});
});
</script>
@endsection