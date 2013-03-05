<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/kompetensi') ?>" id="list"><?php echo lang('kompetensi_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Kompetensi.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/kompetensi/create') ?>" id="create_new"><?php echo lang('kompetensi_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>