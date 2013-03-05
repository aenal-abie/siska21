<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/tahunakademik/') ?>" id="list"><?php echo lang('detail_kalender_akademik_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Detail_Kalender_Akademik.Jurusan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/jurusan/detail_kalender_akademik/create/'.$this->uri->segment(5)) ?>" id="create_new"><?php echo lang('detail_kalender_akademik_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>