<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
  
  <body>   
    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1><?php echo e($subject); ?></h1>
				
				<p class="lead"><?php echo $bodyMessage; ?></p>

				<hr>
				
			</div>

			<div class="col-md-4">
				<div class="well">
					<a href="<?php echo e(url('moderate/posts/'.$post_id)); ?>" class="btn btn-primary">Approve</a>

				</div>
			</div>
		</div>
    </div> <!-- end of .container --> 

  </body>
</html>