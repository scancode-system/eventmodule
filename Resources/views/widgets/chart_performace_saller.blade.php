<div class="col-md-{{ $widget->columns }}">
	<div class="card">
		<div class="card-header">Meta Representantes</div>
		<div class="card-body pb-0">
			@if($saller)
			<div class="row">
				<div class="col-sm-3">
					<div class="callout callout-dark my-0">
						<small class="text-muted">Representante destaque</small>
						<br>
						<strong class="h5">{{ $saller->name }}</strong>
						<div class="chart-wrapper">
							<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="callout callout-primary my-0">
						<small class="text-muted">Vendas</small>
						<br>
						<strong class="h5">@currency($saller->sales)</strong>
						<div class="chart-wrapper">
							<canvas id="sparkline-chart-2" width="100" height="30"></canvas>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="callout callout-danger my-0">
						<small class="text-muted">Pedidos Concluídos</small>
						<br>
						<strong class="h5">{{ $saller->orders }}</strong>
						<div class="chart-wrapper">
							<canvas id="sparkline-chart-3" width="100" height="30"></canvas>
						</div>
					</div>
				</div>
				<!-- /.col-->
				<div class="col-sm-3">
					<div class="callout callout-success my-0">
						<small class="text-muted">Ticket médio</small>
						<br>
						<strong class="h5">@currency($saller->average_ticket)</strong>
						<div class="chart-wrapper">
							<canvas id="sparkline-chart-4" width="100" height="30"></canvas>
						</div>
					</div>
				</div>
			</div>
			<hr>
			@endif
			<div class="row">
				@foreach($sallers as $name => $saler)
				<div class="col-sm-6">
					<div class="progress-group mb-4">
						<div class="progress-group-prepend">
							<span class="progress-group-text">{{ $saler->name }}</span>
						</div>
						<div class="progress-group-bars">
							<div class="progress progress-xds" data-toggle="tooltip" data-placement="left" title="R$ 23.222,643 - 94% de Vendas em relação ao Pedro Vasconcelos">
								<div class="progress-bar bg-primary" role="progressbar" style="width: {{ $saler->percentage }}%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">@currency($saler->sales)</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>