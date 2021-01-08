<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<?php
$pembayaran = [
  'name' => 'pembayaran',
  'id' => 'pembayaran',
  'value' => null,
  'class' => 'form-control',
];

$status = [
  'name' => 'status',
  'id' => 'status',
  'value' => 'berhasil',
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
<?= form_open_multipart('Transaksi/confirm/' . $model->id) ?>
<div class="card col-5 mx-auto " style="margin-top: 100px;" hidden>
  <div class="form-group">
    <?= form_label("", "status") ?>
    <?= form_input($status) ?>
  </div>
</div>
<div class="card col-5 mx-auto " style="margin-top: 100px;">
  <h1>Bukti pembayaran</h1>

  <img class="img-fluid" style="height: 600px;" alt="image" src="<?= base_url('uploads/' . $model->pembayaran) ?>" />


  <div class="text-right">
    <?= form_submit($submit) ?>
  </div>

  <?= form_close() ?>
  <?= $this->endSection() ?>