<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/mahasiswa/mahasiswa_bumigora') ?>" id="list"><?php echo lang('mahasiswa_bumigora_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Mahasiswa_Bumigora.Mahasiswa.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/mahasiswa/mahasiswa_bumigora/create') ?>" id="create_new"><?php echo lang('mahasiswa_bumigora_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>