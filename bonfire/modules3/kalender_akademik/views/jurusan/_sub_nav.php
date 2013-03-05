<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/kalender_akademik') ?>" id="list"><?php echo lang('kalender_akademik_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Kalender_Akademik.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/kalender_akademik/create') ?>" id="create_new"><?php echo lang('kalender_akademik_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>