<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/keuangan/pembayaran') ?>" id="list"><?php echo lang('pembayaran_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/keuangan/pembayaran/create') ?>" id="create_new"><?php echo lang('pembayaran_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>