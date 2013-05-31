<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
echo $this->Html->meta('icon');

echo $this->Html->css('bst/bootstrap.min');
echo $this->Html->css('bst/bootstrap-responsive.min');

echo $this->Html->css('styles');
?>

</head>
<body>

	<?php echo $this->element('main/header'); ?>

	<div class="container-fluid">
		<div class="raw-fluid">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>

	<?php echo $this->Html->script('bst/bootstrap.min.js'); ?>
	<?php echo $this->Html->script('bst/jquery.min.js'); ?>
</body>
</html>
