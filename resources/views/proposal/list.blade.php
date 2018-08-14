@extends('layouts/app') 
@section('content')
<div class="container">
	@foreach ($proposals['data'] as $k => $v)
		<div class="col-xs-12">
			<span class="col-xs-12" style="background-color: #ddd; margin: 5px; padding: 5px 15px">{{$v['code']}}</span>
		</div>
	@endforeach
	
</div>
<div class="container">
	<div class="col-xs-4">
		@if ($proposals['prev_page_url'])
		<a href="{{$proposals['prev_page_url']}}"><span style="font-weight: bold; float: left;">Previous</span></a>
		@endif
	</div>
	<div class="col-xs-4"><span style="font-weight: bold;">Current Page : {{$proposals['current_page']}}</span></div>
	<div class="col-xs-4">
		@if ($proposals['next_page_url'])
			<a href="{{$proposals['next_page_url']}}"><span style="font-weight: bold; float: right;">Next</span></a>
		@endif
	</div>
</div>
@endsection