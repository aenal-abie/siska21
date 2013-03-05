<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/sistem_penilaian') ?>" id="list"><?php echo lang('sistem_penilaian_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Sistem_Penilaian.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/sistem_penilaian/create') ?>" id="create_new"><?php echo lang('sistem_penilaian_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>