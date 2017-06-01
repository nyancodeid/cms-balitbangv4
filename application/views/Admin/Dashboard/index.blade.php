@layout('Admin/Dashboard/layout')

@section('style')
<style>
@import '{{ base_url("assets/css/chartist.min.css") }}';
@import '{{ base_url("assets/css/chartist-plugin-tooltip.css") }}';

.demo-card-wide.mdl-card {
	width: 100%;
}
.demo-card-wide > .mdl-card__menu {
	color: #fff;
}
.left-submenu a {
	cursor: pointer;
}

/*Article*/
#article-lists {
	list-style: none;
}
#article-lists figure {
	padding: 0 8px;
	padding-right: 16px;
}
#article-lists .img {
	height: 48px;
	width: 48px;

	border-radius: 100%;
	display: inline-block;
}
#article-lists article {
	padding: 8px;
}
#article-lists li:not(:last-child) article {
	border-bottom: 1px solid #eee;
}
#article-lists article article-content {
	max-width: 270px;
}
#article-lists article-stats {
	padding: 8px;

	font-size: 20px;
}
#article-lists article figure,
#article-lists article article-content,
#article-lists article article-stats {
	float: left;
}
.subtitle {
	font-size: 12px;
	line-height: 1.5;
}
</style>
@endsection

@section('content')
<content-apps>
<div class="row">
	<div class="col-md-7">
		<h4>Pageview</h4>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp">
			<div class="ct-chart">
				
			</div>
			<div class="mdl-card__supporting-text">
			Berikut adalah statistik pengunjung di website {{ $config['sekolah']['name'] }} dalam kurun waktu 5 hari. Statistik mungkin tidak begitu akurat.
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
					Selengkapnya
				</a>
			</div>
		</div>

		<h4>Top 5 Article</h4>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp">
			<ul id="article-lists" np>
				@for ($i=0; $i < 5; $i++)
					<li>
						<article class="clearfix">
							<figure>
								@include('Components/imgCover', ["url" => base_url('storage/images/dump.png'), "class" => "img"])
								<span class="mdl-badge mdl-badge--overlap" data-badge="{{ ($i + 1) }}"></span>
							</figure>
							<article-content>
								<a href="">
									<h6 nm>Judul</h6>
								</a>
								<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</article-content>
							<article-stats>
								<span class="subtitle">Pembaca</span><br>
								{{ ($i+1)*3 }}K
							</article-stats>
						</article>
					</li>
				@endfor
			</ul>
		</div>
	</div>
	<div class="col-md-5">
		<div class="mdl-card mdl-shadow--2dp">
			<div class="mdl-card__supporting-text">
				<h5 nm>More</h5>
			</div>
			<div class="table-responsive">
				<table class="table table-small grey-text">
					<colgroup>
						<col width="">
						<col width="60">
						<col width="50">
					</colgroup>
					<tbody>
						<tr>
							<td>Komentar Baru</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Pengunjung Hari Ini</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Post Hari ini</td>
							<td>2</td>
						</tr>
						<tr>
							<td>Dibagikan Hari ini</td>
							<td>2</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="card-info mdl-card mdl-shadow--2dp mdl-color--primary mdl-color-text--primary-contrast" style="margin: 16px 0;min-height: 80px">
			<div style="padding: 16px;">
				<h3 style="margin: 16px 0;">Write Post Now!</h3>
				<a href="#" class="mdl-button mdl-button--raised mdl-button--accent"><i class="material-icons">edit</i> Write</a>
			</div>
		</div>
	</div>
</div>
</content-apps>
@endsection

@section('javascript')
<script src="{{ base_url('assets/js/chartist.min.js') }}"></script>
<script src="{{ base_url('assets/js/chartist-plugin-tooltip.min.js') }}"></script>
<script>
$(function() {
	new Chartist.Line('.ct-chart', {
		labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Today'],
		series: [
			[12, 9, 7, 8, 5]
		]
	}, {
		high: 20,
		fullWidth: true,
		showArea: true,
		heigh: '176px',
		chartPadding: {
			right: 40
		},
		plugins: [
			Chartist.plugins.tooltip({
				anchorToPoint: true
			})
		]
	});
})
</script>
@endsection