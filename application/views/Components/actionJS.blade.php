<script>
var action = {
	login: function(data) {
		$.ajax({
			"url": "{{ base_url('bb-admin/ajax/do/login') }}",
			"method": "POST",
			"data": data,
			"dataType": "json"
		}).done(function(res) {
			if (res.status)
			{
				balitbang.isLogin = 1;
				action.isLogin();
			}
		});
	},
	logout: function() {
		$.ajax({
			url: "{{ base_url('/bb-admin/ajax/do/logout') }}",
			method: "POST",
			data: {
				csrf_balitbang: balitbang.hash
			},
			"dataType": "json"
		}).done(function(res) {
			if (res.status) {
				console.log('res');
				var notification = document.querySelector('.mdl-js-snackbar');
				var data = {
					message: 'Logout Succesfuly',
					timeout: 2000
				};
				notification.MaterialSnackbar.showSnackbar(data);

				setTimeout(function() {
					document.location = "{{ base_url('bb-admin/login') }}";
				}, 3000);
			}
		});
	},
	isLogin: function() {
		if (balitbang.isLogin)
		{
			var notification = document.querySelector('.mdl-js-snackbar');
			var data = {
				message: 'Redirecting',
				timeout: 2000
			};
			notification.MaterialSnackbar.showSnackbar(data);

			setTimeout(function() {
				document.location = "{{ base_url('bb-admin') }}";
			}, 3000);
		}
	}
};
</script>