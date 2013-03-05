<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/matakuliah') ?>" id="list"><?php echo lang('matakuliah_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Matakuliah.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/matakuliah/create') ?>" id="create_new"><?php echo lang('matakuliah_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>