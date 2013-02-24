<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/jenjang') ?>" id="list"><?php echo lang('jenjang_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Jenjang.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/jenjang/create') ?>" id="create_new"><?php echo lang('jenjang_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>