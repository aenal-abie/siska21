<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/manajemen/ruang') ?>" id="list"><?php echo lang('ruang_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Ruang.Manajemen.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/manajemen/ruang/create') ?>" id="create_new"><?php echo lang('ruang_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>