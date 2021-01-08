<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<?php
$pembayaran = [
  'name' => 'pembayaran',
  'id' => 'pembayaran',
  'value' => null,
  'class' => 'form-control',
];

$submit = [
  'name' => 'submit',
  'id' => 'submit',
  'value' => 'Submit',
  'class' => 'btn btn-success',
  'type' => 'submit',
];
?>
<div class="card col-9 mx-auto " style="margin-top: 100px;">
  <h1>Upload bukti pembayaran</h1>

  <?= form_open_multipart('Transaksi/pembayaran/' . $transaksi->id) ?>

  <img class="img-fluid" alt="image" src="<?= base_url('uploads/' . $transaksi->pembayaran) ?>" />

  <div class="form-group">
    <?= form_label("Pembayaran", "pembayaran") ?>
    <?= form_upload($pembayaran) ?>
  </div>

  <div class="text-right">
    <?= form_submit($submit) ?>
  </div>

  <?= form_close() ?>
  <?= $this->endSection() ?>