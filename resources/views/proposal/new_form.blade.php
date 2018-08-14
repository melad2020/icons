@extends('layouts/app') @section('content')
<style>
	label {
		float: right;
		text-align: right;
	}
</style>
<div class="container">
	<form action="{{URL::route('new_add')}}" method="post">
		<div class="container">
				{!! csrf_field() !!}
				<div class="col-xs-12">
					<div class="col-xs-3">
						<label class="">Sales Man</label>
					</div>
					<div class="col-xs-9">
						<select name='sales'> @foreach ($employees as $k => $v)
							<option value="{{$v->id}}">{{$v->name . " :: " . $v->code}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="col-xs-3">
						<label class="">Service</label>
					</div>
					<div class="col-xs-9">
						<select name='service'> @foreach ($services as $k => $v)
							<option value="{{$v->id}}">{{$v->name . " :: " . $v->code}}</option>
							@endforeach
						</select>
					</div>
				</div>
				
				<div class="col-xs-12">
					<div class="col-xs-3">
						<label class="">Source</label>
					</div>
					<div class="col-xs-9">
						<select name='source'> @foreach ($sources as $k => $v)
							<option value="{{$v->id}}">{{$v->name . " :: " . $v->code}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="col-xs-3">
						<label class="">Client</label>
					</div>
					<div class="col-xs-9">
						<select name='client'> @foreach ($clients as $k => $v)
							<option value="{{$v->id}}">{{$v->name . " :: " . $v->code}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12">
					<input type="submit" style="" value="submit" />
				</div>
			</form>
		</div>
	</form>
</div>
@endsection
