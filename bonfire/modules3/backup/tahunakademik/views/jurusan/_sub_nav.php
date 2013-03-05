<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tahunakademik') ?>" id="list"><?php echo lang('tahunakademik_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Tahunakademik.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tahunakademik/create') ?>" id="create_new"><?php echo lang('tahunakademik_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>