<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="card col-9 mx-auto " style="margin-top: 100px;">


	<p>
		<i>DailyGoods</i><br>
		Bandung, Indonesia<br>
		081312044347 <br>
		Pembayaran: <br>
		BNI 0740448532 an Ihsan Saiful Hadi
	</p>
	<h4>Transaksi No <?= $transaksi->id_trans ?></h4>
	<table class="table">
		<tr>
			<td>Barang</td>
			<td><?= $transaksi->nama ?></td>
		</tr>
		<tr>
			<td>Pembeli</td>
			<td><?= $transaksi->username ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?= $transaksi->alamat ?></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><?= $transaksi->jumlah ?></td>
		</tr>
		<tr>
			<td>Total Harga</td>
			<td><?= $transaksi->total_harga ?></td>
		</tr>
	</table>

	<a href="<?= site_url('transaksi/pembayaran/' . $transaksi->id_trans) ?>" class="btn btn-info">Upload Bukti Pembayaran</a>




	<?= $this->endSection() ?>