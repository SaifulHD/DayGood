<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="card col-9 mx-auto " style="margin-top: 100px;">
	<h1>Daftar user</h1>
	<table class="table">
		<thead>
			<th>Id</th>
			<th>Username</th>
			<th>Created By</th>
			<th>Created Date</th>
		</thead>
		<tbody>
			<?php foreach ($data['users'] as $index => $user) : ?>
				<tr>
					<td><?= $user->id ?></td>
					<td><?= $user->username ?></td>
					<td><?= $user->created_by ?></td>
					<td><?= $user->created_date ?></td>
					<td><a href="<?= site_url('user/delete/' . $user->id) ?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<div style="float:right">
		<?= $data['pager']->links('default', 'custom_pagination') ?>
	</div>
	<div class="card col-9 mx-auto " style="margin-top: 100px;">
		<?= $this->endSection() ?>