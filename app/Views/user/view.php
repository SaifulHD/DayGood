<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>View profile</h1>
<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <img class="img-fluid" alt="image" src="<?= base_url('img/' . $user->avatar) ?>" />
        </div>
      </div>
    </div>
    <div class="col-6">
      <h1 class="text-success"><?= $user->fullname ?></h1>
      <h4>Email : <?= $user->email ?></h4>
    </div>
  </div>
</div>
<?= $this->endSection() ?>