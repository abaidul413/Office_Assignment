<?php $__env->startSection('title', '| Create New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

	<?php echo Html::style('css/parsley.css'); ?>

	<?php echo Html::style('css/select2.min.css'); ?>

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menubar: false
		});
	</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Job</h1>
			<hr>
			<?php echo Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)); ?>

				<?php echo e(Form::label('email', 'Email:')); ?>

				<?php echo e(Form::text('email', Auth::user()->email, array('class' => 'form-control', 'required' => '','readonly' => '', 'maxlength' => '255'))); ?>


				<?php echo e(Form::label('title', 'Title:')); ?>

				<?php echo e(Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>


				<?php echo e(Form::label('body', "Post Body:")); ?>

				<?php echo e(Form::textarea('body', null, array('class' => 'form-control'))); ?>


				<?php echo e(Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))); ?>

			<?php echo Form::close(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

	<?php echo Html::script('js/parsley.min.js'); ?>

	<?php echo Html::script('js/select2.min.js'); ?>


	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>