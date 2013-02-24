<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/predikatkelulusan') ?>" id="list"><?php echo lang('predikatkelulusan_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('PredikatKelulusan.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/predikatkelulusan/create') ?>" id="create_new"><?php echo lang('predikatkelulusan_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>