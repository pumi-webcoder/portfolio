<dl>
	<?php if (get_field($args['dd1'])) { ?>
		<dt><?php echo $args['dt1']; ?></dt>
		<dd><?php the_field($args['dd1']); ?></dd>
	<?php } ?>
	<?php if (get_field($args['dd2'])) { ?>
		<dt><?php echo $args['dt2']; ?></dt>
		<dd><?php the_field($args['dd2']); ?></dd>
	<?php } ?>
	<?php if (get_field($args['dd3'])) { ?>
		<dt><?php echo $args['dt3']; ?></dt>
		<dd><?php the_field($args['dd3']); ?></dd>
	<?php } ?>
	<?php if (get_field($args['dd4'])) { ?>
		<dt><?php echo $args['dt4']; ?></dt>
		<dd><?php the_field($args['dd4']); ?></dd>
	<?php } ?>
</dl>
