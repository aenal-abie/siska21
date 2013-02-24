<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/matakuliah_prasyarat') ?>" id="list"><?php echo lang('matakuliah_prasyarat_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/matakuliah_prasyarat/create') ?>" id="create_new"><?php echo lang('matakuliah_prasyarat_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>