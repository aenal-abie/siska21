<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/nama_jurusan') ?>" id="list"><?php echo lang('nama_jurusan_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Nama_Jurusan.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/nama_jurusan/create') ?>" id="create_new"><?php echo lang('nama_jurusan_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>