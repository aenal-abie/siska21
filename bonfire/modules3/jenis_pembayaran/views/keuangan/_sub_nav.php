<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/keuangan/jenis_pembayaran') ?>" id="list"><?php echo lang('jenis_pembayaran_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Jenis_Pembayaran.Keuangan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/keuangan/jenis_pembayaran/create') ?>" id="create_new"><?php echo lang('jenis_pembayaran_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>