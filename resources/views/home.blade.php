@extends('layouts.master')

@section('styles')
@stop

@section('content')
<div class="container">
    <div class="row">
    	@if ($new)
    	<div class="col m6 s12">
    		<h3>New Data Added</h3>
    		<ul class="collection">
    	@foreach ($new as $d)
			    <li class="collection-item">
			    	<div class="row no-margin">
			    	<div class="col s3 no-padding">
			      		<img src="{{ $d->image_header? \ImageHelper::getContentHeaderThumb($d->image_header): 'default-image.jpg' }}" alt="" class="responsive-img materialboxed">
			      	</div>
			    	<div class="col s8">
				      	<a href="{{ url('page/'.$d->slug) }}">
				      		<h5 class="title no-margin">{{ str_limit(strip_tags($d->title),45,'...') }}</h5>
				      	</a>
				      	<p>{{ str_limit(strip_tags($d->content), 70, '...') }}</p>
			      	</div>
			      	</div>
			    </li>
        @endforeach
			</ul>
		</div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
@stop