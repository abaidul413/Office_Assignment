<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<h1><?php echo e($post->title); ?></h1>
			
			<p class="lead"><?php echo $post->body; ?></p>

			<hr>
			
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p><?php echo e(date('M j, Y h:ia', strtotime($post->created_at))); ?></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p><?php echo e(date('M j, Y h:ia', strtotime($post->updated_at))); ?></p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<a href="<?php echo e(url('moderate/posts/spam/'.$post->id)); ?>" class="btn btn-primary">Make Spam</a>
					<div class="col-sm-6">
						<a href="<?php echo e(url('moderate/posts/approve/'.$post->id)); ?>" class="btn btn-primary">Approve</a>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>