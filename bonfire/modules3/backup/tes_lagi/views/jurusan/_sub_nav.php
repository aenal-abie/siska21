<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tes_lagi') ?>" id="list"><?php echo lang('tes_lagi_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Tes_Lagi.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tes_lagi/create') ?>" id="create_new"><?php echo lang('tes_lagi_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>