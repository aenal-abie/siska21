<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/mahasiswa/mahasiswa') ?>" id="list"><?php echo lang('mahasiswa_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Mahasiswa.Mahasiswa.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/mahasiswa/mahasiswa/create') ?>" id="create_new"><?php echo lang('mahasiswa_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>