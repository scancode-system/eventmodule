<div class="col-md-{{ $widget->columns }}">
	<div class="card">
		<div class="card-header">Meta Geral</div>
		<div class="card-body">
			@if($goal > 0)
			<div class="progress bg-secondary">
				<div class="progress-bar bg-{{ ($porcentage==100)?'success':'danger' }}" role="progressbar" style="width: {{ $porcentage  }}%;" aria-valuenow="{{ $porcentage  }}" aria-valuemin="0" aria-valuemax="100">{{ round($porcentage)  }}%</div>
			</div>
			@if($porcentage<100)
			<p class="lead mb-0 mt-2 text-center">@currency($current) / @currency($goal)</p>
			@else
			<p class="lead mb-0 mt-2 text-center text-success">META CUMPRIDA</p>
			@endif

			@else
			<p class="lead my-0 text-center text-danger">DEINFA UMA META</p>
			@endif
		</div>
	</div>
</div>