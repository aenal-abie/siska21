<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/manajemen/departemen') ?>" id="list"><?php echo lang('departemen_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Departemen.Manajemen.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/manajemen/departemen/create') ?>" id="create_new"><?php echo lang('departemen_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>