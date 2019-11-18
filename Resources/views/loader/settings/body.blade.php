<div class="tab-pane {{ ($tab=='event_setting')?'show active':'' }}" >
	@alert_errors()
	@alert_success()
	{{ Form::model($setting_event, ['route' => 'setting_event.update', 'method' => 'put']) }}

	<div class="form-group">
		{{ Form::label('title', 'nome do Evento') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
	</div>
	<fieldset class="form-group">
		{{ Form::label('company_name', 'Data do Evento') }}
		<div class="input-group">
			<span class="input-group-prepend">
				<span class="input-group-text">
					<i class="fa fa-calendar"></i>
				</span>
			</span>
			<input class="form-control" name="daterange" type="text">
		</div>
	</fieldset>
	<div class="row">
		<div class="col">
			<div class="form-group">
				{{ Form::label('goal', 'Meta Geral') }}
				{{ Form::number('goal', null, ['class' => 'form-control']) }}
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				{{ Form::label('goal_saller', 'Meta por Representante') }}
				{{ Form::number('goal_saller', null, ['class' => 'form-control']) }}
			</div>
		</div>
	</div>

	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
	{{ Form::close() }}
</div> 





@push('styles')
{{ Html::style('modules/dashboard/coreui/vendors/bootstrap-daterangepicker/css/daterangepicker.min.css') }} 
@endpush


@push('scripts')
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js') }}
{{ Html::script('modules/dashboard/coreui/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}


<script>
	$('input[name="daterange"]').daterangepicker({
		opens: 'left',
		ranges: {
			Today: [moment(), moment()],
			Yesterday: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		}
	});

</script>

@endpush