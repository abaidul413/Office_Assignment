@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{!! $post->body !!}</p>

			<hr>
			
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<a href="{{ url('moderate/posts/spam/'.$post->id) }}" class="btn btn-primary">Make Spam</a>
					<div class="col-sm-6">
						<a href="{{ url('moderate/posts/approve/'.$post->id) }}" class="btn btn-primary">Approve</a>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection