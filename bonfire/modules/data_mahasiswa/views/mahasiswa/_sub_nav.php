<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/mahasiswa/data_mahasiswa') ?>" id="list"><?php echo lang('data_mahasiswa_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Data_Mahasiswa.Mahasiswa.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/mahasiswa/data_mahasiswa/create') ?>" id="create_new"><?php echo lang('data_mahasiswa_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>