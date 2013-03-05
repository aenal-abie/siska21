<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/penjadwalan/data_penjadwalan') ?>" id="list"><?php echo lang('data_penjadwalan_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Data_Penjadwalan.Penjadwalan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/penjadwalan/data_penjadwalan/create') ?>" id="create_new"><?php echo lang('data_penjadwalan_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>