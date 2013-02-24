<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/beban_studi') ?>" id="list"><?php echo lang('beban_studi_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Beban_Studi.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/beban_studi/create') ?>" id="create_new"><?php echo lang('beban_studi_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>