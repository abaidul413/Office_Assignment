<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body>   
    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $subject }}</h1>
				
				<p class="lead">{!! $bodyMessage !!}</p>

				<hr>
				
			</div>

			<div class="col-md-4">
				<div class="well">
					<a href="{{ url('moderate/posts/'.$post_id) }}" class="btn btn-primary">Approve</a>

				</div>
			</div>
		</div>
    </div> <!-- end of .container --> 

  </body>
</html>