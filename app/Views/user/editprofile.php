<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php

$fullname = [
  'name' => 'fullname',
  'id' => 'fullname',
  'value' => $user->fullname,
  'class' => 'form-control',
];

$email = [
  'name' => 'email',
  'id' => 'email',
  'value' => $user->email,
  'class' => 'form-control',
];

$avatar = [
  'name' => 'avatar',
  'id' => 'avatar',
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



<?= $this->endSection() ?>

<div class="card col-9 mx-auto " style="margin-top: 100px;"><?= form_open_multipart('Auth/editprofile/' . session()->get('id')) ?>
  <div class="row no-gutters">
    <div class="col-4 my-auto">
      <img class="img-avatar" style="margin-left: 50px ;" alt="image" src="<?= base_url('uploads/' . $user->avatar) ?>" />
    </div>
    <div class="col-8">
      <div class="card-body">
        <h3 class="card-title">Edit Profile</h3>

        <div class="form-group">
          <?= form_label("Full Name", "fullname") ?>
          <?= form_input($fullname) ?>
        </div>

        <div class="form-group">
          <?= form_label("Email", "email") ?>
          <?= form_input($email) ?>
        </div>

        <div class="form-group">
          <?= form_label("Avatar", "avatar") ?>
          <?= form_upload($avatar) ?>
        </div>

        <div class="text-right">
          <?= form_submit($submit) ?>
        </div>
      </div>
    </div>
  </div>
</div>







<div class="form-group-list col-6 d-felx flex-row-reverse">

</div>
</div>
<!-- <?= form_close() ?> -->
<?= $this->endSection() ?>