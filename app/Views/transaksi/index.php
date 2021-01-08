<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="card col-9 mx-auto " style="margin-top: 100px;">
	<h1>Transaksi</h1>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Barang</th>
				<th>Pembeli</th>
				<th>Alamat</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Status</th>
				<th>Bukti pembayaran</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($model as $index => $transaksi) : ?>
				<tr>
					<td><?= $transaksi->id ?></td>
					<td><?= $transaksi->id_barang ?></td>
					<td><?= $transaksi->id_pembeli ?></td>
					<td><?= $transaksi->alamat ?></td>
					<td><?= $transaksi->jumlah ?></td>
					<td><?= $transaksi->total_harga ?></td>
					<td><?= $transaksi->status ?></td>
					<td class="popup-gallery"><img src="<?= base_url(); ?>/uploads/<?= $transaksi->pembayaran ?>" alt="" class="img-bukti"></td>
					<td>
						<a href="<?= site_url('transaksi/confirm/' . $transaksi->id) ?>" class="btn btn-primary">Confirm</a>
						<a href="<?= site_url('transaksi/view/' . $transaksi->id) ?>" class="btn btn-primary">View</a>
						<a href="<?= site_url('transaksi/invoice/' . $transaksi->id) ?>" class="btn btn-info">Invoice</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<?= $this->endSection() ?>