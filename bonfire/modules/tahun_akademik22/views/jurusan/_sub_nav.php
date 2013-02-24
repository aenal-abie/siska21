<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tahun_akademik') ?>" id="list"><?php echo lang('tahun_akademik_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Tahun_Akademik.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tahun_akademik/create') ?>" id="create_new"><?php echo lang('tahun_akademik_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>